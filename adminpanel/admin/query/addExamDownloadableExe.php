<?php
include("../../../conn.php");
$res = array("res" => "noCourse1");

extract($_POST);

if ($Unit_Code == "" && $Unit_Code == null) {
    $res = array("res" => "noUnit_Code");
} else if ($course == "0") {
    $res = array("res" => "noCourse");
} else {
    if (isset($_POST['file']) != "") {
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $type = $_FILES['file']['type'];
        $temp = $_FILES['file']['tmp_name'];
        // $caption1=$_POST['caption'];
        // $link=$_POST['link'];
        $fname = date("YmdHis") . '_' . $name;
        $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
        if ($chk) {
            $i = 1;
            $c = 0;
            while ($c == 0) {
                $i++;
                $reversedParts = explode('.', strrev($name), 2);
                $tname = (strrev($reversedParts[1])) . "_" . ($i) . '.' . (strrev($reversedParts[0]));
                // var_dump($tname);exit;
                $chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
                if ($chk2 == 0) {
                    $c = 1;
                    $name = $tname;
                }
            }
        }
        $move =  move_uploaded_file($temp, "../pages/upload_download/upload/" . $fname);
        if ($move) {
            $query = $conn->query("insert into exam_download(name,fname,cou_id,Unit_Code)values('$name','$fname','$course','$Unit_Code')");
            if ($query) {
                $res = array("res" => "success", "msg" => $email);
            } else {
                $res = array("res" => "failed");
            }
        }
    } else {
        $res = array("res" => "noFile");
    }








  //  $insData = $conn->query("INSERT INTO examinee_tbl(exmne_fullname,exmne_course,exmne_gender,exmne_birthdate,exmne_year_level,exmne_email,exmne_password) VALUES('$fullname','$course','$gender','$bdate','$year_level','$email','$password')  ");
 //   if ($insData) {
    //    $res = array("res" => "success", "msg" => $email);
   // } else {
   //     $res = array("res" => "failed");
  //  }
}


echo json_encode($res);
