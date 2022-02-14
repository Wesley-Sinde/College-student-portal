<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php


if (isset($_POST['submitaddsmsApi']) != "") {
  extract($_POST);

  $selsmsApi = $conn->query("SELECT * FROM smsApi WHERE smsApi='$smsApi'");
  if ($selsmsApi->rowCount() > 0) {
?>
    <script>
      Swal.fire("API already exist", "", "error");
    </script>
    <?php
  } else {

    $insData = $conn->query("INSERT INTO smsApi(name,smsApi)	VALUES('$name','$smsApi')");
    if ($insData) { ?>
      <script>
        Swal.fire(
          "Success",
          <?php $smsApi; ?> + " <br>has been successfully added!",
          "success"
        );
      </script>
    <?php
    } else { ?>
      <script>
        Swal.fire(<?php $smsApi; ?> + " Was not added, Something's Went Wrong", "", "error");
      </script>
    <?php
    }
    //  echo json_encode($res);	
  }
}

if (isset($_POST['submitupdateapi']) != "") {
  extract($_POST);

  $updateData = $conn->query("UPDATE smsApi SET smsApi='$smsApi'	WHERE smsApi_id='$id'");
  if ($updateData) { ?>
    <script>
      Swal.fire(
        "Success",
        <?php $smsApi; ?> + " <br>has been successfully updated!",
        "success"
      );
    </script>
  <?php
  } else { ?>
    <script>
      Swal.fire(<?php $smsApi; ?> + " Was not added, Something's Went Wrong", "", "error");
    </script>
<?php
  }
}
?>



<!-- Modal For Add Examinee -->
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
  <div class="app-main__inner">
    <div class="app-page-title">
      <div class="page-title-wrapper">
        <div class="page-title-heading">
          <div style="border-bottom: 1px solid rgba(2, 145, 240, 0.3);">Adding System API</div>
        </div>
      </div>
    </div>
    <hr>
    <div>
      <div class="card form-row" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add API</h5>
            <a style="padding-left: 4%;" class="app-sidebar__heading" href="home.php">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </a>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
              <!-- <div class="col-md-3 mb-3"> -->

              <form class="needs-validation" novalidate class="refreshFrm" method="post">
                <div class="form-row card">

                  <div class="col-md-12 mb-12">
                    <div>
                      <label>Give The Name Of your API</label>
                      <!--Textarea with icon prefix-->
                      <div class="md-form amber-textarea active-amber-textarea-2">
                        <i class="fas fa-pencil-alt prefix"></i>
                        <textarea id="name" name="name" class="md-textarea form-control" placeholder="Type here..." required rows="1"></textarea>
                        <label for="form24">
                          <strong>N/B: </strong>Type valid name
                        </label>
                        <div class="invalid-feedback">
                          You must give a valid name.
                        </div>
                      </div>
                    </div>
                    <label>Give The Value Of Your API</label>
                    <!--Textarea with icon prefix-->
                    <div class="md-form amber-textarea active-amber-textarea-2">
                      <i class="fas fa-pencil-alt prefix"></i>
                      <textarea id="smsApi" name="smsApi" class="md-textarea form-control" placeholder="Type here..." required rows="2"></textarea>
                      <label for="form24">
                        <strong>N/B: </strong>Type valid API value
                      </label>
                      <div class="invalid-feedback">
                        You must give a valid value For Your API.
                      </div>
                    </div>
                    <div style="padding: 0%; margin:0%;" class="modal-footer">
                      <button style="margin: auto;" type="submit" name="submitaddsmsApi" class="btn btn-primary">Add New API Now</button>
                    </div>
                  </div>
                </div>
              </form>
              <hr>
              <div class="col-md-12 mb-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-12">
                        <h5>API /<span>Registered</span></h5>
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
                            Value
                            <span class="arrow asc"></span>
                          </th>
                          <th>
                            Description
                            <span class="arrow asc"></span>
                          </th>
                          <th>
                            Last Updated
                            <span class="arrow asc"></span>
                          </th>
                          <th>
                            Action
                            <span class="arrow asc"></span>
                          </th>
                        </thead>
                        <tbody>
                          <?php
                          $selCourse = $conn->query("SELECT * FROM smsApi ORDER BY smsApi_id asc");
                          $loopno = 0;
                          while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                            $loopno += 1;
                          ?>
                            <form method="post">
                              <tr>
                                <td>
                                  <input type="hidden" value="<?php echo $selCourseRow['smsApi_id']; ?>" name="id">
                                  <?php echo $loopno; ?>
                                </td>
                                <td>
                                  <input class="form-control" type="text" name="smsApi" value="<?php echo $selCourseRow['smsApi']; ?>" id="">

                                </td>
                                <td>
                                  <?php echo $selCourseRow['name']; ?>

                                </td>
                                <td>
                                  <?php echo date("d/m/Y", strtotime($selCourseRow['created'])); ?>
                                </td>
                                <td>
                                  <button type="submit" name="submitupdateapi" class="btn btn-primary">Update</button>
                                </td>
                              </tr>
                            </form>
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