<script type="text/javascript" src="../../../assets/scripts/main.js"></script>
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/myjs.js"></script>
<script type="text/javascript" src="../../../js/ajax.js"></script>
<script type="text/javascript" src="../../../js/sweetalert.js"></script>
<script type="text/javascript" src="../../../js/facebox.js"></script>
<link href="../../../main.css" rel="stylesheet">
<link href="../../../css/sweetalert.css" rel="stylesheet">
<link href="../../../css/facebox.css" rel="stylesheet">
<?php
include("../../../conn.php");
include("../../../includes/header.php");

extract($_POST); ?>

<?php

$examName = preg_replace('/\s+/', '', (strtolower($courseSelected . $year_level . $Term_level . $YearSelected . $Academic_level)));

if ($unit10 !== "" && $unit10 !== null) {
  $createUnit = $conn->query("CREATE TABLE `$examName` (
   ID INT(100)  NOT NULL ,
Reg_No varchar(1000) NOT NULL ,
  unit1cat INT(11) ,
  unit2cat INT(11) , 
  unit3cat INT(11) ,
  unit4cat INT(11) ,
  unit5cat INT(11) ,
  unit6cat INT(11) ,
  unit7cat INT(11),
  unit8cat INT(11),
  unit9cat INT(11),
  unit10cat INT(11),

  unit1asgn INT(11) ,
  unit2asgn INT(11) ,
  unit3asgn INT(11) ,
  unit4asgn INT(11) ,
  unit5asgn INT(11) ,
  unit6asgn INT(11) ,
  unit7asgn INT(11),
  unit8asgn INT(11),
  unit9asgn INT(11),
  unit10asgn INT(11),

  unit1 INT(11) ,
  unit2 INT(11) ,
  unit3 INT(11) ,
  unit4 INT(11) ,
  unit5 INT(11) ,
  unit6 INT(11) ,
  unit7 INT(11) ,
  unit8 INT(11) ,
  unit9Code INT(11),
  unit10Code INT(11)
  )");




  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit1','$unit1Code','$examName,Unit1')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit2','$unit2Code','$examName,Unit2')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit3','$unit3Code','$examName,Unit3')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit4','$unit4Code','$examName,Unit4')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit5','$unit5Code','$examName,Unit5')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit6','$unit6Code','$examName,Unit6')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit7','$unit7Code','$examName,Unit7')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit8','$unit8Code','$examName,Unit8')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit9','$unit9Code','$examName,Unit9')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit10','$unit10Code','$examName,Unit10')");
} elseif ($unit9 !== "" && $unit9 !== null) {
  $createUnit = $conn->query("CREATE TABLE `$examName` (
   ID INT(100)  NOT NULL ,
Reg_No varchar(1000) NOT NULL ,
  unit1cat INT(11) ,
  unit2cat INT(11) , 
  unit3cat INT(11) ,
  unit4cat INT(11) ,
  unit5cat INT(11) ,
  unit6cat INT(11) ,
  unit7cat INT(11),
  unit8cat INT(11),
  unit9cat INT(11),

  unit1asgn INT(11) ,
  unit2asgn INT(11) ,
  unit3asgn INT(11) ,
  unit4asgn INT(11) ,
  unit5asgn INT(11) ,
  unit6asgn INT(11) ,
  unit7asgn INT(11),
  unit8asgn INT(11),
  unit9asgn INT(11) ,

  unit1 INT(11) ,
  unit2 INT(11) ,
  unit3 INT(11) ,
  unit4 INT(11) ,
  unit5 INT(11) ,
  unit6 INT(11) ,
  unit7 INT(11) ,
  unit8 INT(11) ,
  unit9 INT(11)
  )");





  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit1','$unit1Code','$examName,Unit1')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit2','$unit2Code','$examName,Unit2')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit3','$unit3Code','$examName,Unit3')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit4','$unit4Code','$examName,Unit4')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit5','$unit5Code','$examName,Unit5')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit6','$unit6Code','$examName,Unit6')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit7','$unit7Code','$examName,Unit7')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit8','$unit8Code','$examName,Unit8')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit9','$unit9Code','$examName,Unit9')");
} elseif ($unit8 !== "" && $unit8 !== null) {
  $createUnit = $conn->query("CREATE TABLE `$examName` (
   ID INT(100)  NOT NULL ,
Reg_No varchar(1000) NOT NULL ,
  unit1cat INT(11) ,
  unit2cat INT(11) , 
  unit3cat INT(11) ,
  unit4cat INT(11) ,
  unit5cat INT(11) ,
  unit6cat INT(11) ,
  unit7cat INT(11),
  unit8cat INT(11) ,

  unit1asgn INT(11) ,
  unit2asgn INT(11) ,
  unit3asgn INT(11) ,
  unit4asgn INT(11) ,
  unit5asgn INT(11) ,
  unit6asgn INT(11) ,
  unit7asgn INT(11),
  unit8asgn INT(11),

  unit1 INT(11) ,
  unit2 INT(11) ,
  unit3 INT(11) ,
  unit4 INT(11) ,
  unit5 INT(11) ,
  unit6 INT(11) ,
  unit7 INT(11) ,
  unit8 INT(11)
  )");


  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit1','$unit1Code','$examName,Unit1')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit2','$unit2Code','$examName,Unit2')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit3','$unit3Code','$examName,Unit3')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit4','$unit4Code','$examName,Unit4')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit5','$unit5Code','$examName,Unit5')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit6','$unit6Code','$examName,Unit6')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit7','$unit7Code','$examName,Unit7')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit8','$unit8Code','$examName,Unit8')");
} elseif ($unit7 !== "" && $unit7 !== null) {
  $createUnit = $conn->query("CREATE TABLE `$examName` (
   ID INT(100)  NOT NULL ,
Reg_No varchar(1000) NOT NULL ,
  unit1cat INT(11) ,
  unit2cat INT(11) , 
  unit3cat INT(11) ,
  unit4cat INT(11) ,
  unit5cat INT(11) ,
  unit6cat INT(11) ,
  unit7cat INT(11),

  unit1asgn INT(11) ,
  unit2asgn INT(11) ,
  unit3asgn INT(11) ,
  unit4asgn INT(11) ,
  unit5asgn INT(11) ,
  unit6asgn INT(11) ,
  unit7asgn INT(11) ,

  unit1 INT(11) ,
  unit2 INT(11) ,
  unit3 INT(11) ,
  unit4 INT(11) ,
  unit5 INT(11) ,
  unit6 INT(11) ,
  unit7 INT(11)
  )");

  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit1','$unit1Code','$examName,Unit1')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit2','$unit2Code','$examName,Unit2')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit3','$unit3Code','$examName,Unit3')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit4','$unit4Code','$examName,Unit4')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit5','$unit5Code','$examName,Unit5')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit6','$unit6Code','$examName,Unit6')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit7','$unit7Code','$examName,Unit7')");
} elseif ($unit6 !== "" && $unit6 !== null) {
  $createUnit = $conn->query("CREATE TABLE `$examName` (
   ID INT(100)  NOT NULL ,
Reg_No varchar(1000) NOT NULL ,
  unit1cat INT(11) ,
  unit2cat INT(11) , 
  unit3cat INT(11) ,
  unit4cat INT(11) ,
  unit5cat INT(11) ,
  unit6cat INT(11),

  unit1asgn INT(11) ,
  unit2asgn INT(11) ,
  unit3asgn INT(11) ,
  unit4asgn INT(11) ,
  unit5asgn INT(11) ,
  unit6asgn INT(11),

  unit1 INT(11) ,
  unit2 INT(11) ,
  unit3 INT(11) ,
  unit4 INT(11) ,
  unit5 INT(11) ,
  unit6 INT(11)
  )");


  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit1','$unit1Code','$examName,Unit1')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit2','$unit2Code','$examName,Unit2')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit3','$unit3Code','$examName,Unit3')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit4','$unit4Code','$examName,Unit4')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit5','$unit5Code','$examName,Unit5')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit6','$unit6Code','$examName,Unit6')");
} elseif ($unit5 !== "" && $unit5 !== null) {
  $createUnit = $conn->query("CREATE TABLE `$examName` (
   ID INT(100)  NOT NULL ,
Reg_No varchar(1000) NOT NULL ,
  unit1cat INT(11) ,
  unit2cat INT(11) , 
  unit3cat INT(11) ,
  unit4cat INT(11) ,
  unit5cat INT(11),

  unit1asgn INT(11) ,
  unit2asgn INT(11) ,
  unit3asgn INT(11) ,
  unit4asgn INT(11) ,
  unit5asgn INT(11) ,

  unit1 INT(11) ,
  unit2 INT(11) ,
  unit3 INT(11) ,
  unit4 INT(11) ,
  unit5 INT(11)
  )");

  //create assgnment table



  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit1','$unit1Code','$examName,Unit1')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit2','$unit2Code','$examName,Unit2')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit3','$unit3Code','$examName,Unit3')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit4','$unit4Code','$examName,Unit4')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit5','$unit5Code','$examName,Unit5')");
} elseif ($unit4 !== "" && $unit4 !== null) {
  $createUnit = $conn->query("CREATE TABLE `$examName` (
   ID INT(100)  NOT NULL ,
Reg_No varchar(1000) NOT NULL ,
  unit1cat INT(11) ,
  unit2cat INT(11) , 
  unit3cat INT(11) ,
  unit4cat INT(11) ,

  unit1asgn INT(11) ,
  unit2asgn INT(11) ,
  unit3asgn INT(11) ,
  unit4asgn INT(11) ,

  unit1 INT(11) ,
  unit2 INT(11) ,
  unit3 INT(11) ,
  unit4 INT(11)
  )");






  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit1','$unit1Code','$examName,Unit1')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit2','$unit2Code','$examName,Unit2')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit3','$unit3Code','$examName,Unit3')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit4','$unit4Code','$examName,Unit4')");
} else {
  $createUnit = $conn->query("CREATE TABLE `$examName` (
   ID INT(100)  NOT NULL ,
Reg_No varchar(1000) NOT NULL ,
  unit1cat INT(11) ,
  unit2cat INT(11) ,
  unit3cat INT(11) ,
  
  unit1asgn INT(11) ,
  unit2asgn INT(11) ,
  unit3asgn INT(11) ,
  
  unit1 INT(11) ,
  unit2 INT(11) ,  
  unit3 INT(11)
   )");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit1','$unit1Code','$examName,Unit1')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit2','$unit2Code','$examName,Unit2')");
  $query = $conn->query("insert into units_code(Unit,unit_code,examName,Unit_Assigned_Name)values('$unit3','$unit3Code','$examName,Unit3')");

  $query = $conn->query("insert into exams_tbl(Exam,unit_code,examName)values('$unit3','$unit3Code','$examName,Unit')");
}
echo ($examName);
//$examName = $courseSelected . $year_level . $Term_level . $YearSelected;

//$query = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_year_level='$year_level' and Term='$Term_level' and exmne_course='$courseSelected' ");
//while ($row = $query->fetch()) {
//  $exmne_id = $row['exmne_id'];
//$checkIfExist = $conn->query("SELECT * FROM $examName WHERE exmne_id='$exmne_id'");
// if ($checkIfExist->rowCount() < 1) {
//   $insData = $conn->query("INSERT INTO $examName(exmne_id) VALUES('$exmne_id')  ");
//}
//}


if ($createUnit) {
  // $insUnitCode = $conn->query("INSERT INTO Units_code(Unit,unit_code) VALUES($courseSelected,$examTitle,$timeLimit,$examQuestDipLimit,$examDesc,$Unit_Code) ");
  //$query1 = $conn->query("ALTER TABLE $examName
 // ADD PRIMARY KEY (`ID`);
 // MODIFY `ID` int(10000) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;");
 

 $query1 = $conn->query("ALTER TABLE $examName
  ADD PRIMARY KEY (`ID`);
 ALTER TABLE $examName MODIFY ID INT(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
 COMMIT;");


  include("../../../conn.php");
  $query = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_year_level='$year_level' and Term='$Term_level' and exmne_course='$courseSelected' and Academic_level='$Academic_level' ORDER BY exmne_id DESC");
  if ($query->rowCount() > 0) {
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
      $Reg_No = $row['Reg_No'];
      $checkIfExist = $conn->query("SELECT * FROM $examName WHERE Reg_No='$Reg_No'");
      if ($checkIfExist->rowCount() < 1) {
        $query1 = $conn->query("insert into $examName (Reg_No)values('$Reg_No,Unit')");
        //$insData = $conn->query("INSERT INTO $examName(exmne_id) VALUES('$exmne_id,Unit')");
      }
    }
  }



?>
  <script>
    $("body").fadeOut();
    Swal.fire(
      "Created",
      "Units has been created successfully",
      "succes"
    );
    window.location.href = "../../../adminpanel/admin/home.php?page=AddCourseUnits";
  </script>
<?php
} else {
?>
  <script>
    Swal.fire(
      "Failed",
      "An erro occured while creating the database",
      "error"
    );
  </script>
<?php } ?>