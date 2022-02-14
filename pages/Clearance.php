<style>
  .active-pink-textarea.md-form label.active {
    color: #f48fb1;
  }

  .pink-textarea textarea.md-textarea:focus:not([readonly]) {
    border-bottom: 1px solid #f48fb1;
    box-shadow: 0 1px 0 0 #f48fb1;
  }

  .pink-textarea.md-form .prefix.active {
    color: #f48fb1;
  }

  .active-pink-textarea.md-form textarea.md-textarea:focus:not([readonly])+label {
    color: #f48fb1;
  }

  .active-amber-textarea.md-form label.active {
    color: #ffa000;
  }

  .amber-textarea textarea.md-textarea:focus:not([readonly]) {
    border-bottom: 1px solid #ffa000;
    box-shadow: 0 1px 0 0 #ffa000;
  }

  .amber-textarea.md-form .prefix.active {
    color: #ffa000;
  }

  .active-amber-textarea.md-form textarea.md-textarea:focus:not([readonly])+label {
    color: #ffa000;
  }

  .active-pink-textarea-2 textarea.md-textarea {
    border-bottom: 1px solid #f48fb1;
    box-shadow: 0 1px 0 0 #f48fb1;
  }

  .active-pink-textarea-2.md-form label.active {
    color: #f48fb1;
  }

  .active-pink-textarea-2.md-form label {
    color: #f48fb1;
  }

  .active-pink-textarea-2.md-form .prefix {
    color: #f48fb1;
  }

  .active-pink-textarea-2.md-form textarea.md-textarea:focus:not([readonly])+label {
    color: #f48fb1;
  }

  .active-amber-textarea-2 textarea.md-textarea {
    border-bottom: 1px solid #ffa000;
    box-shadow: 0 1px 0 0 #ffa000;
  }

  .active-amber-textarea-2.md-form label.active {
    color: #ffa000;
  }

  .active-amber-textarea-2.md-form label {
    color: #ffa000;
  }

  .active-amber-textarea-2.md-form .prefix {
    color: #ffa000;
  }

  .active-amber-textarea-2.md-form textarea.md-textarea:focus:not([readonly])+label {
    color: #ffa000;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
try {
  //`Id`, `ex_id`, `reason`, `cleared`, `dateRequested`, `dateCleared`, `created`
  $id = $_SESSION['examineeSession']['exmne_id'];
  if (isset($_POST['submitClearance'])) {
    $datesaave = date('Y/m/d H:i:s');
    extract($_POST); //reason
    $insData = $conn->query("INSERT INTO clearence(ex_id,reason,dateRequested)
     VALUES('$id','$reason','$datesaave')");
    if ($insData) {
      $res = "success";
?>
      <script>
        Swal.fire(
          "Success",
          "Your request has been submitted Successfully",
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
          "Submitting Failed",
          "error"
        );
      </script>
  <?php
    }
  }
  ?>
  <link rel="stylesheet" type="text/css" href="css/mycss.css">
  <div class="app-main__outer">
    <div class="app-main__inner">
      <?php
      $selectIfPaid = $conn->query("SELECT * FROM examinee_tbl where exmne_status='active' and exmne_id='$id' ");
      if ($selectIfPaid->rowCount() > 0) {
        $selectdate = $conn->query("SELECT * FROM clearence where cleared='no' and ex_id='$id' order by created desc");
        if ($selectdate->rowCount() < 1) { ?>


          <form class="needs-validation" novalidate id="addEunits" method="post">
            <div class="page-title-wrapper">
              <h5 class="page-title-headingr" id="exampleModalLabel">Need Clearence</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="form-row">
              <div class="col-md-12 mb-12">
                <label>Give A Reason For Your Clearence</label>
                <!--Textarea with icon prefix-->
                <div class="md-form amber-textarea active-amber-textarea-2">
                  <i class="fas fa-pencil-alt prefix"></i>
                  <textarea id="form24" name="reason" class="md-textarea form-control" placeholder="Type here..." required rows="3"></textarea>
                  <label for="form24">
                    <strong>N/B: </strong>Describe in detailswhy you need clearence from our school. If not clear it might be void.
                  </label>
                  <div class="invalid-feedback">
                    You must give a reason for your clearence before submitting.
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Agree that i am read to take my clearence
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="submitClearance" class="btn btn-primary">Submit Form Requesting Clearence</button>
              <hr>
              </hr>
              <br> <br> <br>
            </div>
          </form>
        <?php
        } else {
          $daterow = $selectdate->fetch(PDO::FETCH_ASSOC)
        ?>
          <div class="alert alert-warning" role="alert">
            You haven't a pending clearence. Kindly check with your dean to solve this or wait for approval. <br>
            Your query was was created on:
            <?php
            echo  $daterow['created']; ?>
          </div>
        <?php
        }
      } else { ?>
        <div class="alert alert-warning" role="alert">
          You haven't reported for the current semester/Term. <br>
         Want to report? 👇 <br>
          <a style="font-weight: bold;" href="home.php?page=reporting">
            <i class="pe-7s-date"></i> Reporting
          </a>
        </div>
      <?php } ?>
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
  <?php

}

//catch exception
catch (Exception $e) {
  echo 'Message: ' . $e->getMessage();
}
  ?>