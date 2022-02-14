<?php
session_start();
include("../../../conn.php"); 
extract($_POST);
$selAcc = $conn->query("SELECT * FROM finance_acc WHERE admin_user='$username'  ");
$selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);
if ($selAcc->rowCount() > 0) {
  if (password_verify($pass, $selAccRow['admin_pass'])) {
    $_SESSION['finance'] = array(
      'finance_id' => $selAccRow['admin_id'],
      'adminfinancelogin' => true
    );
    $res = array("res" => "success");
      header("location:../home.php");
  } else {
    $res = array("res" => "invalid");
  }
} else {
    $res = array("res" => "invalid");
}
echo json_encode($res);
