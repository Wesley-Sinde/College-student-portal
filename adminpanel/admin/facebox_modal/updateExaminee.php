<?php
// include("../../../conn.php");
//include("../Home.php");
@$id = $_GET['id'];

$selExmne = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$id' ")->fetch(PDO::FETCH_ASSOC);

$selExamineeFullname = $conn->query("SELECT * FROM examinee_tbl WHERE Reg_No='$Reg_No' ");
$selExamineeEmail = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_email='$email' ");


if ($gender == "0") {
   $res = array("res" => "noGender");
?>
   <script>
      Swal.fire("No gender selected", "", "error");
   </script>
<?php
} else if ($course == "0") {
   $res = array("res" => "noCourse");
?>
   <script>
      Swal.fire("No Course selected", "", "error");
   </script>
<?php
} else if ($year_level == "0") {
   $res = array("res" => "noLevel");
?>
   <script>
      Swal.fire("No level Selected", "", "error");
   </script>
<?php
} else if ($selExamineeFullname->rowCount() > 0) {
   $res = array("res" => "fullnameExist", "msg" => $Reg_No);
?>
   <script>
      Swal.fire("Registration number exist", "", "error");
   </script>
<?php
} else if ($selExamineeEmail->rowCount() > 0) {
   $res = array("res" => "emailExist", "msg" => $email);
?>
   <script>
      Swal.fire("Emailexist", "", "error");
   </script>
   <?php
} else {
   if (isset($_POST['submitupdate']) != "") {
      extract($_POST);
      $password = password_hash($email, PASSWORD_DEFAULT);
      $updCourse  = $conn->query("UPDATE examinee_tbl SET exmne_fullname='$fullname',exmne_course='$course',exmne_gender='$gender',exmne_birthdate='$bdate',exmne_year_level='$year_level',exmne_email='$email',Academic_Level='$Academic_level',Term='$Term_level',Reg_No='$Reg_No',exmne_status='$exmne_status', address='$address', School='$School', Class='$Class', Admission_Year='$Admission_Year', academicYear='$academicYear',exmne_password='$password'  WHERE exmne_id='$id'");



      //    $updCourse = $conn->query("UPDATE examinee_tbl SET exmne_fullname='$exFullname', exmne_course='$exCourse', 
      // exmne_gender='$exGender', exmne_birthdate='$exBdate', exmne_year_level='$year_level',
      //  exmne_email='$exEmail', address='$address', School='$School', 
      //  Academic_Level='$Academic_level', Admission_Year='$Admission_Year' 
      //  Class='$Class', Term='$Term_level' 
      //  WHERE exmne_id='$exmne_id' ");
      if ($updCourse) {
         $res = array("res" => "success", "exFullname" => $fullname); ?>
         <script>
            alert("s");
            Swal.fire(
               "Success",
               data.exFullname + " <br>has been successfully updated!",
               "success"
            );
         </script>
      <?php
      } else {
         $res = array("res" => "failed"); ?>
         <script>
            Swal.fire("Something's Went Wrong", "", "error");
         </script>
<?php
      }
   }
   //  echo json_encode($res);	
}
?>



<!-- Modal For Add Examinee -->
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
   <div class="app-main__inner">
      <div class="app-page-title">
         <div class="page-title-wrapper">
            <div class="page-title-heading">
               <div style="border-bottom: 1px solid rgba(2, 145, 240, 0.3);">
                  Update Examnee
               </div>
            </div>
         </div>
      </div>
      <hr>
      <div>
         <div class="card form-row" role="document">
            <form class="needs-validation" novalidate class="refreshFrm" id="updateExamineeFrmAdmin" method="post">
               <input type="hidden" name="course_id" value="<?php echo $id; ?>">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Add Examinee</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="col-md-12">
                        <!-- <div class="col-md-3 mb-3"> -->
                        <div class="form-row">
                           <div class="col-md-12 mb-12">
                              <label>Fullname</label>
                              <input type="" name="fullname" id="fullname" value="<?php echo $selExmne['exmne_fullname']; ?>" class="form-control" placeholder="Input Fullname" autocomplete="off" required="">
                           </div>
                           <div class="col-md-3 mb-12">
                              <label>Reg No</label>
                              <input value="<?php echo $selExmne['Reg_No']; ?>" type="" name="Reg_No" id="Reg_No" class="form-control" placeholder="Input Reg No" autocomplete="off" required="">
                           </div>
                           <div class="col-md-3 mb-3">
                              <label>Birhdate</label>
                              <input value="<?php echo $selExmne['exmne_birthdate']; ?>" type="date" name="bdate" id="bdate" class="form-control" placeholder="Input Birhdate" autocomplete="off">
                           </div>
                           <div class="col-md-3 mb-3">
                              <label>Gender</label>
                              <select class="form-control" name="gender" id="gender">
                                 <option value="<?php echo $selExmne['exmne_gender']; ?>"><?php echo $selExmne['exmne_gender']; ?></option>
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                              </select>
                           </div>
                           <div class="col-md-3 mb-3">
                              <label>Course</label>
                              <select class="form-control" name="course" id="course">
                                 <?php
                                 $exmneCourse = $selExmne['exmne_course'];
                                 $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$exmneCourse' ")->fetch(PDO::FETCH_ASSOC);
                                 ?>
                                 <option value="<?php echo $selCourse['cou_id']; ?>"><?php echo $selCourse['cou_name']; ?></option>
                                 <?php
                                 $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                                 while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                                 <?php }
                                 ?>
                              </select>
                           </div>
                           <div class="col-md-3 mb-3">
                              <label>Year Level</label>
                              <select class="form-control" name="year_level" id="year_level" required>
                                 <option value="<?php echo $selExmne['exmne_year_level']; ?>"><?php echo $selExmne['exmne_year_level']; ?></option>
                                 <option value="first year">First Year</option>
                                 <option value="second year">Second Year</option>
                                 <option value="third year">Third Year</option>
                                 <option value="fourth year">Fourth Year</option>
                              </select>
                           </div>

                           <div class="col-md-3 mb-3">
                              <label>Academic Level</label>
                              <select class="mb-2 form-control" name="Academic_level" id="Academic_level" required>
                                 <option value="<?php echo $selExmne['Academic_Level']; ?>"><?php echo $selExmne['Academic_Level']; ?></option>
                                 <option value="Artsan">Artsan</option>
                                 <option value="Certificate">Certificate</option>
                                 <option value="Diploma">Diploma</option>
                              </select>
                           </div>

                           <div class="col-md-3 mb-3">
                              <label>Term Level</label>
                              <select class="mb-2 form-control" name="Term_level" id="Term_level" required>
                                 <option value="<?php echo $selExmne['Term']; ?>"><?php echo $selExmne['Term']; ?></option>
                                 <option value="First Term">First Term</option>
                                 <option value="Second Term">Second Term</option>
                                 <option value="Third Term">Third Term</option>
                              </select>
                           </div>

                           <div class="col-md-3 mb-3">
                              <label>Email</label>
                              <input type="email" value="<?php echo $selExmne['exmne_email']; ?>" name="email" id="email" class="form-control" placeholder="Input Email" autocomplete="off" required="">
                           </div>
                           <div class="col-md-3 mb-3">
                              <label>Status</label>
                              <select class="mb-2 form-control" name="exmne_status" id="exmne_status" required>
                                 <option value="<?php echo $selExmne['exmne_status']; ?>"><?php echo $selExmne['exmne_status']; ?></option>
                                 <option value="active">Active</option>
                                 <option value="inactive">Inactive</option>
                              </select>
                           </div>
                           <div class="col-md-3 mb-12">
                              <label>Admission Year</label>
                              <input type="number" name="Admission_Year" class="form-control" min="2000" max="2099" step="1" value="<?php echo $selExmne['Admission_Year']; ?>" required="" />
                              <div class="invalid-feedback">
                                 You must type year between 2000-2099.
                              </div>
                           </div>

                           <div class="col-md-3 mb-3">
                              <label>Class</label>
                              <select class="form-control" name="Class" id="Class">
                                 <option value="<?php echo $selExmne['Class']; ?>"><?php echo $selExmne['Class']; ?></option>
                                 <?php
                                 $selCourse = $conn->query("SELECT * FROM Class ORDER BY Class_id asc");
                                 while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <option value="<?php echo $selCourseRow['Class']; ?>"><?php echo $selCourseRow['Class']; ?></option>
                                 <?php }
                                 ?>
                              </select>
                           </div>

                           <div class="col-md-3 mb-3">
                              <label>Academic Year</label>
                              <?php
                              $exyid = $selExmne['academicYear'];
                              $selYear = $conn->query("SELECT * FROM academic_year WHERE Year_id='$exyid' ")->fetch(PDO::FETCH_ASSOC);
                              ?>
                              <select class="mb-2 form-control" name="academicYear">
                                 <option value="<?php echo $selYear['Year_id']; ?>"><?php echo $selYear['year_name']; ?></option>
                                 <?php
                                 $selCourse = $conn->query("SELECT * FROM academic_year ORDER BY Year_id DESC");
                                 if ($selCourse->rowCount() > 0) {
                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                       <option value="<?php echo $selCourseRow['Year_id']; ?>"><?php echo $selCourseRow['year_name']; ?></option>
                                    <?php }
                                 } else { ?>
                                    <option value="0">No Year Found</option>
                                 <?php }
                                 ?>
                              </select>
                           </div>

                           <div class="col-md-12 mb-12">
                              <label>School</label>
                              <select class="form-control" name="School" id="School">
                                 <option value="<?php echo $selExmne['School']; ?>"><?php echo $selExmne['School']; ?></option>
                                 <?php
                                 $selCourse = $conn->query("SELECT * FROM School ORDER BY School_id asc");
                                 while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <option value="<?php echo $selCourseRow['School']; ?>"><?php echo $selCourseRow['School']; ?></option>
                                 <?php }
                                 ?>
                              </select>
                           </div>
                           <!-- $insData = $conn->query("INSERT INTO examinee_tbl(exmne_fullname,exmne_course,exmne_gender,exmne_birthdate,exmne_year_level,exmne_email,Academic_Level,Term,Reg_No,exmne_status, address, School, Class, Admission_Year, academicYear,exmne_password)
                           VALUES('$fullname','$course','$gender','$bdate','$year_level','$email','$Academic_level','$Term_level','$Reg_No','$exmne_status','$address','$School','$Class','$Admission_Year','$academicYear')"); -->
                           <div class="col-md-12 mb-12">
                              <label>Give Student Address</label>
                              <!--Textarea with icon prefix-->
                              <div class="md-form amber-textarea active-amber-textarea-2">
                                 <i class="fas fa-pencil-alt prefix"></i>
                                 <textarea id="form24" name="address" class="md-textarea form-control" placeholder="Type address here..." required rows="2"><?php echo $selExmne['address']; ?></textarea>
                                 <label for="form24">
                                    <strong>N/B: </strong>Type student address here
                                 </label>
                                 <div class="invalid-feedback">
                                    You must give a valid address.
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submitupdate" class="btn btn-primary">Update Now</button>
                     </div>
                  </div>
            </form>
         </div>
      </div>

      <script>
         // Example starter JavaScript for disabling form submissions if there are invalid fields
         (function() {
            'use strict';
            window.addEventListener('load', function() {
               // Fetch all the forms we want to apply custom Bootstrap validation styles to
               var forms = document.getElementsByClassName('needs-validation');
               // Loop over them and prevent submission
               var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                     if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                     }
                     form.classList.add('was-validated');
                  }, false);
               });
            }, false);
         })();
      </script>
      <script>
         Swal.fire("Something's Went Wrong", "", "error");
         $(document).on("submit", "#updateExamineeFrmAdmin", function() {
            alert("hru");
            $.post(
               "query/updateExamineeExe.php",
               $(this).serialize(),
               function(data) {
                  if (data.res == "success") {
                     Swal.fire(
                        "Success",
                        data.exFullname + " <br>has been successfully updated!",
                        "success"
                     );
                     refreshDiv();
                  } else if (data.res == "failed") {
                     Swal.fire("Something's Went Wrong", "", "error");
                  }
               },
               "json"
            );
            return false;
         });
      </script>