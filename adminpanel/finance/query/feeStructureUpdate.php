<?php
session_start();
include("../../../conn.php");
$res="";
extract($_POST);
$selFeeStructure = $conn->query("SELECT * FROM fee_structure WHERE Level='$lavel' ");
if ($selFeeStructure->rowCount() > 0){
    $res="exist";
}else{
    $insData = $conn->query("INSERT INTO fee_structure(Level,ammount) VALUES('$lavel','$ammount')");
    if ($insData) {
        $res = "success";
    } else {
        $res = "failed";
        //['error'] = true;
    }
}
$MyUlr= "../home.php?page=FeeStructure&err="& $res;
header($MyUlr);
echo json_encode($res);
