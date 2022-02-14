<!-- Edit Profile -->
<?php
$id = $_SESSION['examineeSession']['exmne_id'];

$selExmne = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$id' ")->fetch(PDO::FETCH_ASSOC);

?>

<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        <legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp; <b> <?php echo strtoupper($selExmne['exmne_fullname']); ?> </b></i></legend>
                    </div>
                </div>
            </div>
        </div>
        <!-- Condition depending on the page you click -->
        <?php
        if (isset($_SESSION['error'])) {
            echo "
	        					<div class='callout callout-danger'>
	        						" . $_SESSION['error'] . "
	        					</div>
	        				";
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['success'])) {
            echo "
	        					<div class='callout callout-success'>
	        						" . $_SESSION['success'] . "
	        					</div>
	        				";
            unset($_SESSION['success']);
        }
        ?>
        <form method="post" enctype="multipart/form-data" id="updateExamineeFrm" action="query/updateExmnee.php" class="needs-validation" novalidate>
            <div class="col-md-12">
                <center>
                    <div class="form-group">
                        <?php
                        $image = (!empty($selExmneeData['photo'])) ? 'images/' . $selExmneeData['photo'] : 'images/profile.jpg';
                        echo  '<img src="' . $image . '" class="user-image rounded-circle" width="150" alt="User Image"> '
                        ?>
                        <div class="col-sm-9">
                            <!-- <input type="file" class="form-control" id="photo" name="photo"> -->
                            <input type="file" class="form-control" name="file"><br />
                        </div>
                    </div>
                </center>
                <hr>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Fullname</label>
                        <input type="hidden" name="exmne_id" value="<?php echo $id; ?>">
                        <input type="" name="exFullname" class="form-control" required="" value="<?php echo $selExmne['exmne_fullname']; ?>">
                        <div class="valid-feedback">
                            Correct!
                        </div>
                        <div class="invalid-tooltip">
                            Please choose a valid name.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Gender</label>
                        <select class="form-control" name="exGender">
                            <option value="<?php echo $selExmne['exmne_gender']; ?>"><?php echo $selExmne['exmne_gender']; ?></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Birthdate</label>
                        <input type="date" name="exBdate" class="form-control" required="" value="<?php echo date('Y-m-d', strtotime($selExmne["exmne_birthdate"])) ?>" />
                        <div class="valid-feedback">
                            Correct!
                        </div>
                        <div class="invalid-tooltip">
                            Please choose a valid DOB.
                        </div>
                    </div>
                </div>


                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <label>Email</label>
                        <input id="validationCustom01" type="email" name="exEmail" class="form-control" required value="<?php echo $selExmne['exmne_email']; ?>">
                        <div class="valid-feedback">
                            Correct!
                        </div>
                        <div class="invalid-tooltip">
                            Please choose a valid E-mail.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="address" class="col-sm-3 control-label">Address</label>

                        <div class="">
                            <textarea required class="form-control" id="address" name="address" placeholder="Your Address"><?php echo $selExmne['address']; ?></textarea>
                            <div class="valid-feedback">
                                Correct!
                            </div>
                            <div class="invalid-tooltip">
                                Please choose a valid address.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>Phone Number</label>
                        <input type="tel" name="tell" class="form-control" required="" placeholder="Enter Your Phone Number"
                        value="<?php echo $selExmne['tell']; ?>"
                        >
                        <div class="valid-feedback">
                            Correct!
                        </div>
                        <div class="invalid-tooltip">
                            Please choose a phone.
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Current Password</label>
                        <input type="password" name="old_password" class="form-control" required="" placeholder="Enter your current password">
                        <div class="valid-feedback">
                            Correct!
                        </div>
                        <div class="invalid-tooltip">
                            Please choose a valid password.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="password" class="">New Password</label>
                        <div class="">
                            <input required type="password" class="form-control" id="password" name="new_password" placeholder="New Password">
                            <div class="valid-feedback">
                                Correct!
                            </div>
                            <div class="invalid-tooltip">
                                Please choose a valid password.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="curr_password" class="">Retype Password</label>

                        <div class="">
                            <input type="password" class="form-control" id="curr_password" name="repeat_password" placeholder="Confirm Your Password" required>
                            <div class="valid-feedback">
                                Correct!
                            </div>
                            <div class="invalid-tooltip">
                                Please choose a valid password.
                            </div>
                        </div>
                    </div>

                </div>


                <div class="form-group" align="center">
                    <button style="font-weight:23;" type="submit" class="btn btn-sm btn-primary">Update Now</button>
                    <br> <br> <br>
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