<!-- Modal For Add Examinee -->
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<div class="app-main__outer">
  <div class="app-main__inner">
    <div class="app-page-title">
      <div class="page-title-wrapper">
        <div class="page-title-heading">
          <div style="border-bottom: 1px solid rgba(2, 145, 240, 0.3);">Adding Student Center</div>
        </div>
      </div>
    </div>
    <hr>
    <div>
      <div class="card form-row" role="document">
        <form class="needs-validation" novalidate class="refreshFrm" id="addExamineeFrm" method="post">
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
                    <input type="" name="fullname" id="fullname" class="form-control" placeholder="Input Fullname" autocomplete="off" required="">
                  </div>
                  <div class="col-md-3 mb-12">
                    <label>Reg No</label>
                    <input type="" name="Reg_No" id="Reg_No" class="form-control" placeholder="Input Reg No" autocomplete="off" required="">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label>Birhdate</label>
                    <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Input Birhdate" autocomplete="off">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label>Gender</label>
                    <select class="form-control" name="gender" id="gender">
                      <option value="0">Select gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label>Course</label>
                    <select class="form-control" name="course" id="course">
                      <option value="0">Select course</option>
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
                      <option value="first year">First Year</option>
                      <option value="second year">Second Year</option>
                      <option value="third year">Third Year</option>
                      <option value="fourth year">Fourth Year</option>
                    </select>
                  </div>

                  <div class="col-md-3 mb-3">
                    <label>Academic Level</label>
                    <select class="mb-2 form-control" name="Academic_level" id="Academic_level" required>
                      <option value="Artsan">Artsan</option>
                      <option value="Certificate">Certificate</option>
                      <option value="Diploma">Diploma</option>
                    </select>
                  </div>

                  <div class="col-md-3 mb-3">
                    <label>Term Level</label>
                    <select class="mb-2 form-control" name="Term_level" id="Term_level" required>
                      <option value="First Term">First Term</option>
                      <option value="Second Term">Second Term</option>
                      <option value="Third Term">Third Term</option>
                    </select>
                  </div>

                  <div class="col-md-3 mb-3">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Input Email" autocomplete="off" required="">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label>Status</label>
                    <select class="mb-2 form-control" name="exmne_status" id="exmne_status" required>
                      <option value="active">Active</option>
                      <option value="inactive">Inactive</option>
                    </select>
                  </div>
                  <div class="col-md-3 mb-12">
                    <label>Admission Year</label>
                    <input type="number" name="Admission_Year" class="form-control" min="2000" max="2099" step="1" value="<?php echo date("Y"); ?>" required="" />
                    <div class="invalid-feedback">
                      You must type year between 2000-2099.
                    </div>
                  </div>

                  <div class="col-md-3 mb-3">
                    <label>Class</label>
                    <select class="form-control" name="Class" id="Class">
                      <option value="0">Select Class</option>
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
                    <select class="mb-2 form-control" name="academicYear">
                      <option value="0">Select Year</option>
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
                      <option value="0">Select School</option>
                      <?php
                      $selCourse = $conn->query("SELECT * FROM School ORDER BY School_id asc");
                      while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?php echo $selCourseRow['School']; ?>"><?php echo $selCourseRow['School']; ?></option>
                      <?php }
                      ?>
                    </select>
                  </div>

                  <div class="col-md-12 mb-12">
                    <label>Give Student Address</label>
                    <!--Textarea with icon prefix-->
                    <div class="md-form amber-textarea active-amber-textarea-2">
                      <i class="fas fa-pencil-alt prefix"></i>
                      <textarea id="form24" name="address" class="md-textarea form-control" placeholder="Type address here..." required rows="2"></textarea>
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
                <button type="submit" class="btn btn-primary">Add Now</button>
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