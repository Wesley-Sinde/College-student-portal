<?php
include("../conn.php");
session_start();
extract($_POST);
$exmneId = $_SESSION['examineeSession']['exmne_id'];

// Select Data of examinee
$selExmneeData = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
$exmneCourse =  $selExmneeData['exmne_course'];


if (password_verify($old_password, $selExmneeData['exmne_password'])) {
	// if (!empty($photo)) {
	// 	//move_uploaded_file($_FILES['photo']['tmp_name'], '../images/' . $photo);

	// 	$filepath = "../images/" . $exmneId . basename($_FILES["photo"]["name"]);
	// 	if (move_uploaded_file($_FILES["photo"]["tmp_name"], $filepath)) {
	// 		echo "The file " . basename($_FILES["photo"]["name"]) . " uploaded..";
	// 	} else {
	// 		echo "Error !!";
	// 	}
	// 		$filename = $photo;
	// } else {
	// 	$filename = $selExmneeData['photo'];
	// }
	$name = $_FILES['file']['name'];
	$fname = date("YmdHis") . '_' . $name;
	$filepath = "../images/" . $name;

	if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
		echo "The file " . basename($_FILES["file"]["name"]) . " uploaded..";
		$filename = $name;
	} else {
		echo "Error !!";
		$filename = $selExmneeData['photo'];
	}



	if ($new_password !== $repeat_password) {
		$_SESSION['error'] = 'Password Do not Match';
	} else {
		if ($repeat_password == $selExmneeData['exmne_password']) {
			$password = $selExmneeData['exmne_password'];
		} else {
			$password = password_hash($repeat_password, PASSWORD_DEFAULT);
		}
		try {
			$updCourse = $conn->query("UPDATE examinee_tbl SET  exmne_fullname='$exFullname', address='$address', photo='$filename', exmne_gender='$exGender', exmne_birthdate='$exBdate', exmne_email='$exEmail', exmne_password='$password',tell='$tell' WHERE exmne_id='$exmne_id' ");
			if ($updCourse) {
				$_SESSION['success'] = 'Account updated successfully';
			} else {
				$_SESSION['error'] = 'Account details not updated successfully, an error occured while updating your details.';
			}
		} catch (PDOException $e) {
			$_SESSION['error'] = $e->getMessage();
		}
	}
} else {
	$_SESSION['error'] = 'Incorrect password || They do not match';
}
//} else {
//	$_SESSION['error'] = 'Fill up edit form first';}

header('location:../home.php?page=userEdit');
