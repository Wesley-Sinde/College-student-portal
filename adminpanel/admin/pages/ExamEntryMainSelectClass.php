<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <form class="needs-validation" novalidate action="<?php echo $ReURL ?>" id="addEunits" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Units</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label>Select Course</label>
                        <select class="mb-2 form-control" name="courseSelected">
                            <option value="0">Select Course</option>
                            <?php
                            $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC");
                            if ($selCourse->rowCount() > 0) {
                                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                                <?php }
                            } else { ?>
                                <option value="0">No Course Found</option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Academic Year</label>
                        <select class="mb-2 form-control" name="YearSelected">
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
                    <div class="col-md-2 mb-3">
                        <label>Year Level</label>
                        <select class="mb-2 form-control" name="year_level" id="year_level">
                            <option value="0">Select year level</option>
                            <option value="first year">First Year</option>
                            <option value="second year">Second Year</option>
                            <option value="third year">Third Year</option>
                            <option value="fourth year">Fourth Year</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Term Level</label>
                        <select class="mb-2 form-control" name="Term_level" id="Term_level" required>
                            <option value="0">Select Term level</option>
                            <option value="First Term">First Term</option>
                            <option value="Second Term">Second Term</option>
                            <option value="Third Term">Third Term</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>Academic Level</label>
                        <select class="mb-2 form-control" name="Academic_level" id="Academic_level" required>
                            <option value="0">Select level</option>
                            <option value="Artsan">Artsan</option>
                            <option value="Certificate">Certificate</option>
                            <option value="Diploma">Diploma</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree that i have entered Data correctly
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="Select_Course" class="btn btn-primary">Proceed To Main Exam Entry</button>
            </div>
        </div>
    </form>

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

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/scripts/main.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>

</html>