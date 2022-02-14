<?php
include("../../../conn.php");

session_start();
extract($_POST);
$query0 = $conn->query("SELECT * FROM units_code where examName='$examName' ORDER BY Id ASC");
echo ($examName);
if ($query0->rowCount() > 0) {
     while ($row = $query0->fetch(PDO::FETCH_ASSOC)) {
          // echo $row['Unit'];
          $result[] = $row['Unit_Assigned_Name'];
     }
}
//$arrlengthw =  $arrlengthw;
if ($arrlengthw > "7") {
     echo ($ID);
     echo ($arrlengthw);
}
if ($arrlengthw > 9) {
     $updMarks = $conn->query("UPDATE $examName SET Unit1='$Unit1', unit2='$Unit2', unit3='$Unit3', unit4='$Unit4', unit5='$Unit5', unit6='$Unit6', unit7='$Unit7', unit8='$Unit8', unit9='$Unit9', unit10='$Unit10' WHERE id='$ID' ");
} elseif ($arrlengthw > 8) {
     $updMarks = $conn->query("UPDATE $examName SET Unit1='$Unit1', unit2='$Unit2', unit3='$Unit3', unit4='$Unit4', unit5='$Unit5', unit6='$Unit6', unit7='$Unit7', unit8='$Unit8', unit9='$Unit9' WHERE id='$ID' ");
} elseif ($arrlengthw > 7) {
     $updMarks = $conn->query("UPDATE $examName SET Unit1='$Unit1', unit2='$Unit2', unit3='$Unit3', unit4='$Unit4', unit5='$Unit5', unit6='$Unit6', unit7='$Unit7', unit8='$Unit8' WHERE id='$ID' ");
} elseif ($arrlengthw > 6) {
     $updMarks = $conn->query("UPDATE $examName SET Unit1='$Unit1', unit2='$Unit2', unit3='$Unit3', unit4='$Unit4', unit5='$Unit5', unit6='$Unit6', unit7='$Unit7' WHERE id='$ID' ");
} elseif ($arrlengthw > 5) {
     $updMarks = $conn->query("UPDATE $examName SET Unit1='$Unit1', unit2='$Unit2', unit3='$Unit3', unit4='$Unit4', unit5='$Unit5', unit6='$Unit6' WHERE id='$ID' ");
} elseif ($arrlengthw > 4) {
     $updMarks = $conn->query("UPDATE $examName SET Unit1='$Unit1', unit2='$Unit2', unit3='$Unit3', unit4='$Unit4', unit5='$Unit5' WHERE id='$ID' ");
} elseif ($arrlengthw > 3) {
     $updMarks = $conn->query("UPDATE $examName SET Unit1='$Unit1', unit2='$Unit2', unit3='$Unit3', unit4='$Unit4' WHERE id='$ID' ");
} elseif ($arrlengthw > 2) {
     $updMarks = $conn->query("UPDATE $examName SET Unit1='$Unit1', unit2='$Unit2', unit3='$Unit3' WHERE id='$ID' ");
} else {
     //$res = array("res" => "Error");
     $output['error'] = true;
     $output['message'] = 'Product already in cart';
}
if ($updMarks) {
     //$res = array("res" => "success");
     $output['message'] = 'Item added to cart';
    // &examName=+65firstyearfirstterm1artsan
     $Urlsend= "location: ../pages/ExamEntryMain.php?output=ok"."&examName=+". $examName;
     
     header($Urlsend);
} else {
     header('location: ../pages/ExamEntryMain.php?output=err');
}

echo json_encode($output);
?>

<Script>
     alert();
</Script>