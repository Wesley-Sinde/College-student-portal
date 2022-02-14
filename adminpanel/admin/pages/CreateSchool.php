<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

if (isset($_POST['submitaddschool']) != "") {
  extract($_POST);

  $selschool = $conn->query("SELECT * FROM school WHERE School='$School'");
  if ($selschool->rowCount() > 0) {
?>
    <script>
      Swal.fire("School already exist", "", "error");
    </script>
    <?php
  } else {

    $insData = $conn->query("INSERT INTO school(School)	VALUES('$School')");
    if ($insData) { ?>
      <script>
        Swal.fire(
          "Success",
          <?php $School; ?> + " <br>has been successfully updated!",
          "success"
        );
      </script>
    <?php
    } else { ?>
      <script>
        Swal.fire(<?php $School; ?> + " Was not added, Something's Went Wrong", "", "error");
      </script>
<?php
    }
    //  echo json_encode($res);	
  }
}
?>



<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
  <div class="app-main__inner">
    <div class="app-page-title">
      <div class="page-title-wrapper">
        <div class="page-title-heading">
          <div style="border-bottom: 1px solid rgba(2, 145, 240, 0.3);">Adding Student School</div>
        </div>
      </div>
    </div>
    <hr>
    <div>
      <div class="card form-row" role="document">
        <form class="needs-validation" novalidate class="refreshFrm" method="post">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add School</h5>
              <a style="padding-left: 4%;" class="app-sidebar__heading" href="home.php">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </a>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <!-- <div class="col-md-3 mb-3"> -->
                <div class="form-row">

                  <div class="col-md-4 mb-12">
                    <label>Give The Name Off The School</label>
                    <!--Textarea with icon prefix-->
                    <div class="md-form amber-textarea active-amber-textarea-2">
                      <i class="fas fa-pencil-alt prefix"></i>
                      <textarea id="school" name="School" class="md-textarea form-control" placeholder="Type school here..." required rows="5"></textarea>
                      <label for="form24">
                        <strong>N/B: </strong>Type valid name for the school here
                      </label>
                      <div class="invalid-feedback">
                        You must give a valid name for the school.
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" name="submitaddschool" class="btn btn-primary">Add New School Now</button>
                    </div>
                  </div>

                  <div class="col-md-8 mb-12">
                    <div class="card">
                      <div class="card-header">
                        <div class="row">
                          <div class="col-md-12">
                            <h5>Schools /<span>Registered</span></h5>
                          </div>
                        </div>
                      </div>
                      <div class="card-block">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-left">
                            <div></div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 offset-md-2">
                            <div class="input-group"><input type="text" placeholder="Search here" class="form-control"> <span class="input-group-append"><label class="input-group-text">Search</label></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-block table-border-style">
                        <div class="table-responsive">
                          <table class="table table-hover table-sm custom-data-table">
                            <thead class="table-primary text-black">
                              <th>
                                #
                                <span class="arrow asc"></span>
                              </th>
                              <th>
                                School
                                <span class="arrow asc"></span>
                              </th>
                              <th>
                                Date Added
                                <span class="arrow asc"></span>
                              </th>
                            </thead>
                            <tbody>
                              <?php
                              $selCourse = $conn->query("SELECT * FROM School ORDER BY School_id asc");
                              $loopno = 0;
                              while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                $loopno += 1;
                              ?>
                                <tr>
                                  <td>
                                    <?php echo $loopno; ?>
                                  </td>
                                  <td>
                                    <?php echo $selCourseRow['School']; ?>
                                  </td>
                                  <td>
                                    <?php echo date("d/m/Y", strtotime($selCourseRow['created'])); ?>
                                  </td>
                                </tr>
                              <?php }
                              ?>
                            </tbody>
                            <!---->
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a style="padding-left: 4%;" class="app-sidebar__heading" href="home.php">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </a>
                <!-- <button type="submit" name="submitaddschool" class="btn btn-primary">Add New School Now</button> -->
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