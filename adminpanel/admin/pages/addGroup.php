<?php
if (isset($_POST['save']) != "") {
    extract($_POST);
    $group_name = strtoupper($group_name);
    $selCourse = $conn->query("SELECT * FROM group_tbl WHERE group_name='$group_name' ");

    if ($selCourse->rowCount() > 0) {
        $res = array("res" => "exist", "group_name" => $group_name);
?>
        <script>
            Swal.fire(
                "Failed",
                "This Group exist, Failed",
                "error"
            );
        </script>
        <?php
    } else {

        $insCourse = $conn->query("INSERT INTO group_tbl(group_name) VALUES('$group_name') ");
        if ($insCourse) {
        ?>
            <script>
                Swal.fire(
                    "Success",
                    "Message sent successfully",
                    "success"
                );
            </script>
        <?php
        } else {
            $res = array("res" => "failed", "group_name" => $group_name);
        ?>
            <script>
                Swal.fire(
                    "Failed",
                    "We were not able to save your Group, Failed",
                    "error"
                );
            </script>
<?php
        }
    }
}
?>
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="col-md-20">
            <div style="margin: 0%;padding:0%" class="app-page-title">
                <div class="page-title-wrapper">

                    <form class="needs-validation" novalidate class="refreshFrm" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Group</h5>
                            <button href="home.php" type="button" class="close" role="button" aria-label="Close">
                                <a href="home.php" role="button">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                            </button>

                        </div>
                        <div class="modal-body">
                            <div class="col-md-20">
                                <div class="form-group">
                                    <label>Group Name</label>
                                    <input type="" name="group_name" id="group" class="form-control" placeholder="Input group name" required="" autocomplete="off">
                                    <div class="invalid-feedback">
                                        You have to enter a valid group name
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button name="save" type="submit" class="btn btn-primary">Add Now</button>
                        </div>
                    </form>

                </div>

            </div>
            <hr>
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