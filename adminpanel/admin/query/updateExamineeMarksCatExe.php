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
    $updMarks = $conn->query("UPDATE $examName SET unit1cat='$Unit1', unit2cat='$Unit2', unit3cat='$Unit3', unit4cat='$Unit4', unit5cat='$Unit5', unit6cat='$Unit6', unit7cat='$Unit7', unit8cat='$Unit8', unit9cat='$Unit9', unit10cat='$Unit10' WHERE id='$ID' ");
} elseif ($arrlengthw > 8) {
    $updMarks = $conn->query("UPDATE $examName SET unit1cat='$Unit1', unit2cat='$Unit2', unit3cat='$Unit3', unit4cat='$Unit4', unit5cat='$Unit5', unit6cat='$Unit6', unit7cat='$Unit7', unit8cat='$Unit8', unit9cat='$Unit9' WHERE id='$ID' ");
} elseif ($arrlengthw > 7) {
    $updMarks = $conn->query("UPDATE $examName SET unit1cat='$Unit1', unit2cat='$Unit2', unit3cat='$Unit3', unit4cat='$Unit4', unit5cat='$Unit5', unit6cat='$Unit6', unit7cat='$Unit7', unit8cat='$Unit8' WHERE id='$ID' ");
} elseif ($arrlengthw > 6) {
    $updMarks = $conn->query("UPDATE $examName SET unit1cat='$Unit1', unit2cat='$Unit2', unit3cat='$Unit3', unit4cat='$Unit4', unit5cat='$Unit5', unit6cat='$Unit6', unit7cat='$Unit7' WHERE id='$ID' ");
} elseif ($arrlengthw > 5) {
    $updMarks = $conn->query("UPDATE $examName SET unit1cat='$Unit1', unit2cat='$Unit2', unit3cat='$Unit3', unit4cat='$Unit4', unit5cat='$Unit5', unit6cat='$Unit6' WHERE id='$ID' ");
} elseif ($arrlengthw > 4) {
    $updMarks = $conn->query("UPDATE $examName SET unit1cat='$Unit1', unit2cat='$Unit2', unit3cat='$Unit3', unit4cat='$Unit4', unit5cat='$Unit5' WHERE id='$ID' ");
} elseif ($arrlengthw > 3) {
    $updMarks = $conn->query("UPDATE $examName SET unit1cat='$Unit1', unit2cat='$Unit2', unit3cat='$Unit3', unit4cat='$Unit4' WHERE id='$ID' ");
} elseif ($arrlengthw > 2) {
    $updMarks = $conn->query("UPDATE $examName SET unit1cat='$Unit1', unit2cat='$Unit2', unit3cat='$Unit3' WHERE id='$ID' ");
} else {
    //$res = array("res" => "Error");
    $output['error'] = true;
    $output['message'] = 'Product already in cart';
}
if ($updMarks) {
    //$res = array("res" => "success");
    $output['message'] = 'Item added to cart';
    // &examName=+65firstyearfirstterm1artsan
    $Urlsend = "location: ../pages/ExamEntryCats.php?output=ok" . "&examName=+" . $examName;

    header($Urlsend);
} else {
    header('location: ../pages/ExamEntryCats.php?output=err');
}

echo json_encode($output);
?>

<Script>
    alert();
</Script>