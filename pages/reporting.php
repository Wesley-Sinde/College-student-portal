<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

$id = $_SESSION['examineeSession']['exmne_id'];
$selExmne = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$id' ")->fetch(PDO::FETCH_ASSOC);
//, `id`, `term`, `year`, `Academic_level`, `academicYear`, `byWho`, `description` FROM `reporting` 

//SELECT `exmne_id`, `exmne_fullname`, `exmne_course`, `Reg_No`, `exmne_gender`, `exmne_birthdate`, `exmne_year_level`, `Academic_Level`, `Term`, `exmne_email`, `exmne_password`, `exmne_status`, `photo`, `address`, `School`, `Class`, `Admission_Year` FROM `examinee_tbl` WHERE 1
// echo $id;
$Term = $selExmne['Term'];
$exmne_year_level = $selExmne['exmne_year_level'];
$exmne_fullname = $selExmne['exmne_fullname'];
$Academic_level = $selExmne['Academic_Level'];
$academicYear = $selExmne['academicYear'];
$selectyrname = $conn->query("SELECT * FROM academic_year where Year_id='$academicYear'")->fetch(PDO::FETCH_ASSOC);
$academicYearname = $selectyrname['year_name'];
if (isset($_POST['reportnow'])) {
  $selectIfPaid = $conn->query("SELECT * FROM examinee_tbl where exmne_status='active' and exmne_id='$id'");
  if ($selectIfPaid->rowCount() < 1) {
    $insData = $conn->query("INSERT INTO reporting(id,term,year,Academic_level,academicYear,byWho,description)
     VALUES('$id','$Term','$exmne_year_level','$Academic_level','$academicYearname','$exmne_fullname','Reported Via Online')");
    $updatedetails = $conn->query("UPDATE  examinee_tbl SET exmne_status='active'");
    if ($insData && $updatedetails) {
      $res = "success";
?>
      <script>
        Swal.fire(
          "Success",
          "Reported Successfully",
          "success"
        );
      </script>
    <?php
    } else {
      $res = "failed";
    ?>
      <script>
        Swal.fire(
          "Failed",
          "Reporting Failed",
          "error"
        );
      </script>
<?php
    }
  }
}
?>


<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
  <div class="app-main__inner">
    <div class="col-md-12">
      <div style="margin: 0%;padding:0%" class="app-page-title">
        <div class="page-title-wrapper">
          <div class="page-title-heading">
            <div>My Reporting</div>
          </div>
        </div>
        <form method="post">
          <?php
          // $Term = $selExmne['Term'];
          // $exmne_year_level = $selExmne['exmne_year_level'];
          // $Academic_level = $selExmne['Academic_level'];
          // $academicYear = $selExmne['academicYear'];
          // $exmne_fullname = $selExmne['exmne_fullname'];
          //, `id`, `term`, `year`, `Academic_level`, `academicYear`, `byWho`, `description` FROM `reporting`
          $selectIfPaid = $conn->query("SELECT * FROM examinee_tbl where exmne_status='active' and exmne_id='$id' ");
          if ($selectIfPaid->rowCount() < 1) { ?>
            <button name="reportnow" style="background-color: blue; color:honeydew; font-weight:bold;" class="btn btn-success btn-lg float-right" type="submit">
              ➕ Report Now
            </button>
          <?php
          }
          ?>

        </form>
      </div>

      <div class="table-responsive">
        <table CELLSPACING=0 id="tableList" class="mb-0 table table-border" style="border: none;">


          <thead>
            <tr class="card-body">
              <th style="color: black;background-color: white; ">
                #
              </th>
              <th style="color: black;background-color: white; ">
                Semester/Term
              </th>
              <th style="color: black;background-color: white; ">
                Academic Level
              </th>
              <th style="color: black;background-color: white; ">
                Date Reported
              </th>
              <th style="color: black;background-color: white; ">
                Type
              </th>
            </tr>
          </thead>
          <tbody>




            <?php //sid`, `id`, `term`, `year`, `year_level`, `academicYear`, `byWho`, `description`, `created
            $selectReport = $conn->query("SELECT * FROM reporting WHERE id ='$Id' ORDER BY created DESC ");
            if ($selectReport->rowCount() > 0) {
              $loop = 0;
              while ($reportfound = $selectReport->fetch(PDO::FETCH_ASSOC)) {
                //`id`, `reportfoundId`, `title`, `meassage`, `description`, `isRead`
                $loop += 1;
            ?>
                <tr style="color: black;background-color:white; ">
                  <td style="font-weight: bold;">
                    <?php echo $loop . ". " ?>
                  </td>
                  <td>
                    <?php echo $reportfound['term'] . "    " . $reportfound['academicYear']; ?>
                  </td>
                  <td>
                    <?php echo " " . $reportfound['Academic_level']; ?>
                  </td>
                  <td>
                    <?php echo date('Y-m-d', strtotime($reportfound['created'])); ?>
                  </td>
                  <td>
                    <?php echo $reportfound['description']; ?>
                  </td>

                </tr>
            <?php
              }
            }
            ?>
            <hr>
          </tbody>
        </table>
      </div>
    </div>
  </div>