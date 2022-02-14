<?php 
 include("../../../conn.php");


extract($_POST);

$selExamineeFullname = $conn->query("SELECT * FROM examinee_tbl WHERE Reg_No='$Reg_No' ");
$selExamineeEmail = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_email='$email' ");


if($gender == "0")
{
	$res = array("res" => "noGender");  
}
else if($course == "0")
{
	$res = array("res" => "noCourse");
}
else if($year_level == "0")
{
	$res = array("res" => "noLevel");
}
else if($selExamineeFullname->rowCount() > 0)
{
	$res = array("res" => "fullnameExist", "msg" => $Reg_No);
}
else if($selExamineeEmail->rowCount() > 0)
{
	$res = array("res" => "emailExist", "msg" => $email);
}
else
{
	$password = password_hash($email, PASSWORD_DEFAULT);
	$insData = $conn->query("INSERT INTO examinee_tbl(exmne_fullname,exmne_course,exmne_gender,exmne_birthdate,exmne_year_level,exmne_email,Academic_Level,Term,Reg_No,exmne_status, address, School, Class, Admission_Year, academicYear,exmne_password) 
	VALUES('$fullname','$course','$gender','$bdate','$year_level','$email','$Academic_level','$Term_level','$Reg_No','$exmne_status','$address','$School','$Class','$Admission_Year','$academicYear','$password')");
	    //  Reg_No, exmne_status, address, School, Class, Admission_Year, academicYear
	if($insData)
	{
		$res = array("res" => "success", "msg" => $email);
	}
	else
	{
		$res = array("res" => "failed");
	}
}


echo json_encode($res);
 ?>