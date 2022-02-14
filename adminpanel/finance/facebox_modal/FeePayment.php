<?php
//include("../Home.php");
$id = $_GET['id'];

$selExmne = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$id' ")->fetch(PDO::FETCH_ASSOC);
if (isset($_POST['submitFeePay']) != "") {
   extract($_POST);
   $fId = $_SESSION['finance']['finance_id'];
   //id	payee	receiver	ammount	payment_mode	created	

   $insData = $conn->query("INSERT INTO examnee_fee_invoices(id,payee,receiver,ammount,payment_mode,Description,Ref) VALUES('$id','$payee','$fId','$ammount','$payment_mode','$Description','$Ref')");
   if ($insData) {
      $res = "success";

?>
      <script>
         Swal.fire(
            "Success",
            "Data updated successfully",
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
            "Insert Failed",
            "error"
         );
      </script>
<?php
   }
}

?>
<div class="app-main__outer">
   <div class="app-main__inner ">
      <center>
         <a align="right" href="home.php?id=<?php echo $id; ?>&page=FeeStatement" class="align-right btn btn-sm btn-primary">Fee Statement</a>
      </center>
      </br>
      <hr>
      <fieldset>
         <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">

            <tbody>
               <tr>
                  <td><b>Fullname</td>
                  <td> <?php echo strtoupper($selExmne['exmne_fullname']); ?></td>
               </tr>
               <tr>
                  <td><b>Gender</td>
                  <td><?php echo $selExmne['exmne_gender']; ?></td>
               </tr>
               <tr>
                  <td><b>Birthdate</td>
                  <td><?php echo date('Y-m-d', strtotime($selExmne["exmne_birthdate"])) ?> </td>
               </tr>
               <?php
               $exmneCourse = $selExmne['exmne_course'];
               $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$exmneCourse' ")->fetch(PDO::FETCH_ASSOC);
               ?>
               <tr>
                  <td><b>Course</td>
                  <td><?php echo $selCourse['cou_name'] ?>
                  </td>
               </tr>
               <tr>
                  <td><b>Year level</td>
                  <td><?php echo $selExmne['exmne_year_level']; ?></td>
               </tr>
               <tr>
                  <td><b>Email</td>
                  <td><?php echo $selExmne['exmne_email']; ?></td>
               </tr>
               <tr>
                  <td><b> Address </td>
                  <td>
                     <Address><?php echo $selExmne['address']; ?></Address>
                  </td>
               </tr>
               <tr>
                  <td><b>School</td>
                  <td><?php echo $selExmne['School']; ?></td>
               </tr>
               <tr>
                  <td><b>Status</td>
                  <td><?php echo $selExmne['exmne_status']; ?></td>
               </tr>
               <tr>

                  <td><b>Fee Balance</td>
                  <td>
                     <?php
                     $FeeBalance = 0;
                     $selPaymentData = $conn->query("SELECT * FROM examnee_fee_invoices where id=$id ORDER BY created DESC ");
                     if ($selPaymentData->rowCount() > 0) {
                        while ($selExmnebal = $selPaymentData->fetch(PDO::FETCH_ASSOC)) {
                           $FeeBalance += $selExmnebal['ammount'];
                        }
                        echo $FeeBalance;
                     } else { ?>

                        <h3 style="background-color: #ff3377;" class="p-3">No Record Found</h3>
                     <?php }
                     ?>
                  </td>
               </tr>
            </tbody>
         </table>

      </fieldset>
      <br>
      <div class="page-title-wrapper widget-content-wrapper text-white card mb-3 widget-content bg-night-fade">
         <div style="font-size: 25px;" class="page-title-heading">
            <div style="font-weight: bolder;"><b>Fee Payment Section</div>
         </div>
      </div>
      <div style="padding: 2%;background-color: white">
         <form action="" style="background-color: white;" method="post" class="needs-validation" novalidate>
            <div class="form-row">
               <div class="col-md-4 mb-3">
                  <label>Paid By</label>
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <input type="" name="payee" class="form-control" required="">
                  <small id="helpId" class="form-text text-muted">Enter the name of the one paying the fee</small>
                  <div class="valid-feedback">
                     Correct!
                  </div>
                  <div class="invalid-tooltip">
                     Please choose a valid Payee.
                  </div>
               </div>
               <div class="col-md-4 mb-3">
                  <label>Ref</label>
                  <input type="" name="Ref" class="form-control" required="">
                  <small id="helpId" class="form-text text-muted">Enter the Ref</small>
                  <div class="valid-feedback">
                     Correct!
                  </div>
                  <div class="invalid-tooltip">
                     Please choose a valid Ref.
                  </div>
               </div>
               <div class="col-md-4 mb-3">
                  <label>Paid ammount</label>
                  <input type="number" name="ammount" class="form-control" required="">
                  <small id="helpId" class="form-text text-muted">Enter the name of the one paying the fee</small>
                  <div class="valid-feedback">
                     Correct!
                  </div>
                  <div class="invalid-tooltip">
                     Please choose a valid ammount.
                  </div>
               </div>
               <div class="col-md-4 mb-3">
                  <label>Payment Mode</label>
                  <input type="" name="payment_mode" class="form-control" required="">
                  <small id="helpId" class="form-text text-muted">Enter the the payment mode</small>
                  <div class="valid-feedback">
                     Correct!
                  </div>
                  <div class="invalid-tooltip">
                     Please enter valid payment mode.
                  </div>
               </div>
               <div class="form-row">
                  <label>Description</label>
                  <input style="width: 100%;" type="text" name="Description" class="form-control" required="">
                  <small id="helpId" class="form-text text-muted">Enter Description for the Payment eg: <i class="fa-bold" aria-hidden="true"> HELB UNDERGRADUATE - BATCH 1624-58193</i></small>
                  <div class="valid-feedback">
                     Correct!
                  </div>
                  <div class="invalid-tooltip">
                     Please choose a valid description.
                  </div>
               </div>
            </div>
            <div class="form-group" align="right">
               <input class="btn btn-sm btn-primary btn-transition btn btn-outline-success" style="padding: 0%; color:white;" type="submit" name="submitFeePay" value="✔ Add Record">
            </div>
         </form>

      </div>
   </div>
</div>
<br><br><br>
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