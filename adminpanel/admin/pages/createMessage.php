<?php
if (isset($_POST['submitFeePay']) != "") {
    extract($_POST);
    $AId = $_SESSION['admin']['admin_id'];
    // `messageId`, `title`, `meassage`, `description`, , `CreatedBy`, 
    $insData = $conn->query("INSERT INTO messages(messageId,title,meassage,description,CreatedBy)
     VALUES('0','$title','$meassage','$description','$AId')");
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
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div style="border-bottom: 1px solid rgba(2, 145, 240, 0.3);">Messaging Center</div>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    Record Your Message Here 👇
                </div>
                <div style="padding: 4%;background-color: white">
                    <form action="" style="background-color: white;" method="post" class="needs-validation" novalidate>
                        <div class="form-row">
                            <label for="exampleText" class="">Title</label>
                            <textarea name="title" id="title" class="form-control" required></textarea>
                            <small id="helpId" class="form-text text-muted">
                                Enter the Title Of The Message
                            </small>
                            <div class="valid-feedback">
                                Correct!
                            </div>
                            <div class="invalid-tooltip">
                                Please choose a Title Name For Your Messsage.
                            </div>
                        </div>

                        <div class="form-row">
                            <label for="exampleText" class="">Message</label>
                            <textarea name="meassage" id="meassage" class="form-control" required></textarea>
                            <small id="helpId" class="form-text text-muted">
                                Enter the Message
                            </small>
                            <div class="valid-feedback">
                                Correct!
                            </div>
                            <div class="invalid-tooltip">
                                Please Enter Your Messsage.
                            </div>
                        </div>


                        <div class="form-row">
                            <label for="description" class="">Description</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                            <small id="helpId" class="form-text text-muted">
                                Enter Description
                            </small>
                            <div class="valid-feedback">
                                Correct!
                            </div>
                            <div class="invalid-tooltip">
                                Please Description For Your Messsage.
                            </div>
                        </div>
                        <div class="form-group" align="right">
                            <input class="btn btn-sm btn-primary btn-transition" type="submit" name="submitFeePay" value="🔴 Add Record">
                        </div>
                    </form>
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