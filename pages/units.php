<?php

$id = $_SESSION['examineeSession']['exmne_id'];
$selExmne = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$id' ")->fetch(PDO::FETCH_ASSOC);
//, `id`, `term`, `year`, `Academic_level`, `academicYear`, `byWho`, `description` FROM `reporting` 

//SELECT `exmne_id`, `exmne_fullname`, `exmne_course`, `Reg_No`, `exmne_gender`, `exmne_birthdate`, `exmne_year_level`, `Academic_Level`, `Term`, `exmne_email`, `exmne_password`, `exmne_status`, `photo`, `address`, `School`, `Class`, `Admission_Year` FROM `examinee_tbl` WHERE 1
// echo $id;F   65firstyearfirstterm1artsan


$courseSelected = $selExmne['exmne_course'];
$year_level = $selExmne['exmne_year_level'];
$Term_level = $selExmne['Term'];
$YearSelected = $selExmne['academicYear'];
$Academic_level = $selExmne['Academic_Level'];

$exmne_fullname = $selExmne['exmne_fullname'];
$examName = preg_replace('/\s+/', '', (strtolower($courseSelected . $year_level . $Term_level . $YearSelected . $Academic_level)));

?>



<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
  <div class="app-main__inner">
    <div class="col-md-12">
      <div style="margin: 0%;padding:0%" class="app-page-title">
        <div class="page-title-wrapper">
          <div class="page-title-heading">
            <div>My Units This Semister/Term</div>
          </div>
        </div>
      </div>
        <br>
      <div style="color:black; border-top: 2px solid black;border-bottom: 2px solid black; margin-bottom:7px; font-weight: bold;">
        <?php
        $exmneId = $_SESSION['examineeSession']['exmne_id'];
        $selExmneeData = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
        ?>
        Name: <?php echo $selExmneeData['exmne_fullname']; ?></br>
        Reg No: <?php echo $selExmneeData['Reg_No'];  ?></br>
        School: <?php echo $selExmneeData['School']; ?></br>
        Program: <?php
                  $selExmneecourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id ='$courseSelected' ")->fetch(PDO::FETCH_ASSOC);
                  echo $selExmneecourse['cou_name'];
                  ?></br>
        Class: <?php echo $selExmneeData['Class'] ?></br>
        Admission Year: <?php echo $selExmneeData['Admission_Year']  ?></br>
        Academic Level: <?php echo $Academic_level ?></br>
        Year Of Study: <?php echo $year_level . " " . $Term_level  ?></br>
        <?php
        $selectIfacive = $conn->query("SELECT * FROM examinee_tbl where exmne_status='active' and exmne_id='$id'");
        if ($selectIfacive->rowCount() > 0) {
        ?>
          Unit Registration : Closed <br>
          Reported Status :Reported <br>
      </div> 
      <div class="table-responsive">
        <table CELLSPACING=0 id="tableList" class="mb-0 table table-border" style="border: none;">
          <thead>
            <tr class="card-body">
              <th style="color: black;background-color: white; ">
                #
              </th>
              <th style="color: black;background-color: white; ">
                Unit Name
              </th>
              <th style="color: black;background-color: white; ">
                Unit Code
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $selectReport = $conn->query("SELECT * FROM units_code WHERE examName ='$examName' ORDER BY Id DESC ");
            // echo $examName;
            if ($selectReport->rowCount() > 0) {
              $loop = 0;
              while ($reportfound = $selectReport->fetch(PDO::FETCH_ASSOC)) {
                $loop += 1;
            ?>
                <!-- `Unit`, `unit_code`, `examName` -->
                <tr style="color: black;background-color:white; ">
                  <td style="font-weight: bold;">
                    <?php echo $loop . ". " ?>
                  </td>
                  <td>
                    <?php echo $reportfound['Unit']; ?>
                  </td>
                  <td>
                    <?php echo  $reportfound['unit_code']; ?>
                  </td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
    <?php
        } else { ?>

      Unit Registration : Open <br>
      Reported Status : Not Reported / Reporting Pending <br>
      <div class="alert alert-warning" role="alert">
        You haven't reported for the current semester/Term.
      </div>

    <?php
        }
    ?>
    </div>
  </div>