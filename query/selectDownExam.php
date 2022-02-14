<?php 
$exmneId = $_SESSION['examineeSession']['exmne_id'];

// Select Data of examinee
$selExmneeData = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
$exmneCourse =  $selExmneeData['exmne_course'];


        
// Select the exam dependent on login 
$selExam = $conn->query("SELECT * FROM upload WHERE cou_id='$exmneCourse' ORDER BY id DESC ");


//

 ?>