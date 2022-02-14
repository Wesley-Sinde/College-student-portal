<?php
session_start();
if ($repeatPass !== $newPass) {
		$_SESSION['error'] = 'Password Do not Match';
	} else {
			$password = password_hash($repeatPass, PASSWORD_DEFAULT);
	
		try {
			$updCourse = $conn->query("UPDATE examinee_tbl SET  exmne_password='$password' WHERE exmne_id='$exmnId' ");
			if ($updCourse) {
				$_SESSION['success'] = 'Account updated successfully';
			} else {
				$_SESSION['error'] = 'Account details not updated successfully, an error occured while updating your details.';
			}
		} catch (PDOException $e) {
			$_SESSION['error'] = $e->getMessage();
		}
	} 

header('location:../home.php?page=userEdit');