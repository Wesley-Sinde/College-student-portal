<?php
 include("../../../conn.php");
 extract($_POST);


$updCourse = $conn->query("UPDATE examinee_tbl SET exmne_fullname='$exFullname', exmne_course='$exCourse', 
exmne_gender='$exGender', exmne_birthdate='$exBdate', exmne_year_level='$year_level',
 exmne_email='$exEmail', address='$address', School='$School', 
 Academic_Level='$Academic_level', Admission_Year='$Admission_Year' 
 Class='$Class', Term='$Term_level' 
 WHERE exmne_id='$exmne_id' ");
 if($updCourse)
{
	   $res = array("res" => "success", "exFullname" => $exFullname);
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>