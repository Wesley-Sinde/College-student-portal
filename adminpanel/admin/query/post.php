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
    $updMarks = $conn->query("UPDATE $examName SET unit1asgn='$Unit1', unit2asgn='$Unit2', unit3asgn='$Unit3', unit4asgn='$Unit4', unit5asgn='$Unit5', unit6asgn='$Unit6', unit7asgn='$Unit7', unit8asgn='$Unit8', unit9asgn='$Unit9', unit10asgn='$Unit10' WHERE id='$ID' ");
} elseif ($arrlengthw > 8) {
    $updMarks = $conn->query("UPDATE $examName SET unit1asgn='$Unit1', unit2asgn='$Unit2', unit3asgn='$Unit3', unit4asgn='$Unit4', unit5asgn='$Unit5', unit6asgn='$Unit6', unit7asgn='$Unit7', unit8asgn='$Unit8', unit9asgn='$Unit9' WHERE id='$ID' ");
} elseif ($arrlengthw > 7) {
    $updMarks = $conn->query("UPDATE $examName SET unit1asgn='$Unit1', unit2asgn='$Unit2', unit3asgn='$Unit3', unit4asgn='$Unit4', unit5asgn='$Unit5', unit6asgn='$Unit6', unit7asgn='$Unit7', unit8asgn='$Unit8' WHERE id='$ID' ");
} elseif ($arrlengthw > 6) {
    $updMarks = $conn->query("UPDATE $examName SET unit1asgn='$Unit1', unit2asgn='$Unit2', unit3asgn='$Unit3', unit4asgn='$Unit4', unit5asgn='$Unit5', unit6asgn='$Unit6', unit7asgn='$Unit7' WHERE id='$ID' ");
} elseif ($arrlengthw > 5) {
    $updMarks = $conn->query("UPDATE $examName SET unit1asgn='$Unit1', unit2asgn='$Unit2', unit3asgn='$Unit3', unit4asgn='$Unit4', unit5asgn='$Unit5', unit6asgn='$Unit6' WHERE id='$ID' ");
} elseif ($arrlengthw > 4) {
    $updMarks = $conn->query("UPDATE $examName SET unit1asgn='$Unit1', unit2asgn='$Unit2', unit3asgn='$Unit3', unit4asgn='$Unit4', unit5asgn='$Unit5' WHERE id='$ID' ");
} elseif ($arrlengthw > 3) {
    $updMarks = $conn->query("UPDATE $examName SET unit1asgn='$Unit1', unit2asgn='$Unit2', unit3asgn='$Unit3', unit4asgn='$Unit4' WHERE id='$ID' ");
} elseif ($arrlengthw > 2) {
    $updMarks = $conn->query("UPDATE $examName SET unit1asgn='$Unit1', unit2asgn='$Unit2', unit3asgn='$Unit3' WHERE id='$ID' ");
} else {
    //$res = array("res" => "Error");
    $output['error'] = true;
    $output['message'] = 'Product already in cart';
}
if ($updMarks) {
    //$res = array("res" => "success");
    $output['message'] = 'Item added to cart';
    // &examName=+65firstyearfirstterm1artsan
    $Urlsend = "location: ../pages/ExamEntryAssign.php?output=ok" . "&examName=+" . $examName;

    header($Urlsend);
} else {
    header('location: ../pages/ExamEntryAssign.php?output=err');
}

echo json_encode($output);
?>

<Script>
    alert();
</Script>