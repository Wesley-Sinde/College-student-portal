         <!doctype html>
         <html lang="en">

         <head>
             <meta charset="utf-8">
             <meta http-equiv="X-UA-Compatible" content="IE=edge">
             <meta http-equiv="Content-Language" content="en">
             <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
             <title>Topmax Online Examination System</title>
             <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=yes" />

             <!-- MAIN CSS here 
              style="width: 100%; @media (min-width:992px){colour:red; padding-left:30% !important; padding-right:30% !important;}"
                -->
             <link href="main.css" rel="stylesheet">
             <link href="css/sweetalert.css" rel="stylesheet">
         </head>
         <div class="center">

             <body id="body"></body>
             <?php include("conn.php"); ?>
             <!-- HEADER -->
             <form class="needs-validation" novalidate id="addExamineeFrm" method="post">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Add Examinee</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <div class="form-row">
                             <div class="col-md-4 mb-3">
                                 <label for="validationCustom01">Fullname</label>
                                 <input type="text" class="form-control" name="fullname" id="validationCustom01" placeholder="Input Fullname" required>
                                 <div class="valid-feedback">
                                     Looks good!
                                 </div>
                             </div>
                             <div class="col-md-4 mb-3">
                                 <label>Birhdate</label>
                                 <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Input Birhdate" autocomplete="off">
                             </div>
                             <div class="col-md-4 mb-3">
                                 <label>Gender</label>
                                 <select class="mb-2 form-control" name="gender" id="gender">
                                     <option value="0">Select gender</option>
                                     <option value="male">Male</option>
                                     <option value="female">Female</option>
                                 </select>
                             </div>
                         </div>
                         <div class="form-row">

                             <div class="col-md-4 mb-3">
                                 <label>Course</label>
                                 <select class="mb-2 form-control" name="course" id="course">
                                     <option value="0">Select course</option>
                                     <?php
                                        $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                                        while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                         <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                                     <?php }
                                        ?>
                                 </select>
                             </div>


                             <div class="col-md-4 mb-3">
                                 <label>Year Level</label>
                                 <select class="mb-2 form-control" name="year_level" id="year_level">
                                     <option value="0">Select year level</option>
                                     <option value="first year">First Year</option>
                                     <option value="second year">Second Year</option>
                                     <option value="third year">Third Year</option>
                                     <option value="fourth year">Fourth Year</option>
                                 </select>
                             </div>


                             <div class="col-md-4 mb-3">
                                 <label>Email</label>
                                 <input type="email" name="email" id="email" class="form-control" placeholder="Input Email" autocomplete="off" required="">
                                 <div class="valid-feedback">
                                     Looks good!
                                 </div>
                             </div>
                         </div>
                         <div class="form-row">
                             <div class="col-md-4 mb-3">
                                 <label>Password</label>
                                 <input type="password" name="password" id="password" class="form-control" placeholder="Input Password" autocomplete="off" required="">
                                 <div class="valid-feedback">
                                     Looks good!
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="form-check">
                             <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                             <label class="form-check-label" for="invalidCheck">
                                 Agree to terms and conditions
                             </label>
                             <div class="invalid-feedback">
                                 You must agree before submitting.
                             </div>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Add Now</button>
                     </div>
                 </div>
             </form>
             </body>
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

             <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
             <script type="text/javascript" src="assets/scripts/main.js"></script>
             <script type="text/javascript" src="js/jquery.js"></script>
             <script type="text/javascript" src="js/myjs.js"></script>
             <script type="text/javascript" src="js/ajax.js"></script>
             <script type="text/javascript" src="js/sweetalert.js"></script>

         </html>