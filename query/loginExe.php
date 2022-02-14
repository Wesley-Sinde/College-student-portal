<?php
session_start();
include("../conn.php");


extract($_POST);
//$pass= password_hash($pass, PASSWORD_DEFAULT);
//$password = password_hash($pass, PASSWORD_DEFAULT);AND exmne_password='$password'
$selAcc = $conn->query("SELECT * FROM examinee_tbl WHERE Reg_No='$username'  ");
$selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);


if ($selAcc->rowCount() > 0) {
  if (password_verify($pass, $selAccRow['exmne_password'])) {
  $_SESSION['examineeSession'] = array(
    'exmne_id' => $selAccRow['exmne_id'],
    'examineenakalogin' => true
  );
  $res = array("res" => "success");

  }else{
    $res = array("res" => "invalid");
    
  }
} else {
  $selAcc = $conn->query("SELECT * FROM examinee_tbl_Nt_reg WHERE Reg_No='$username' AND Tell='$pass' AND Registered='0' ");
  $selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);


  if ($selAcc->rowCount() > 0) {
    $res = array("res" => "new_user");
    //$res = array("res" => "success");
  } else {
    $res = array("res" => "invalid");
  }
}
echo json_encode($res);
