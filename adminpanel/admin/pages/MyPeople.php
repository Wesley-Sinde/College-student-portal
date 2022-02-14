<?php
if (isset($_POST['save']) != "") {
    extract($_POST);
    $selCourse = $conn->query("SELECT * FROM mypeople WHERE tell='$tell' ");

    if ($selCourse->rowCount() > 0) {
?>
        <script>
            Swal.fire(
                "Failed",
                "This Mobile number exist, Failed",
                "error"
            );
        </script>
        <?php
    } else {

        //`id`, `name`, `tell`, `location`, `description`SELECT * FROM `mypeople`
        $insCourse = $conn->query("INSERT INTO mypeople(groupId,name,tell,location,description) VALUES('$groupId','$name','$tell','$location','$description') ");
        if ($insCourse) {
        ?>
            <script>
                Swal.fire(
                    "Success",
                    "Data Saved successfully",
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
                    "We were not able to save this data, Failed",
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
                </div>
                <form class="needs-validation" novalidate class="refreshFrm" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add People</h5>
                        <button href="home.php" type="button" class="close" role="button" aria-label="Close">
                            <a href="home.php" role="button">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </button>

                    </div>
                    <div class="modal-body">
                        <div class="col-md-20">
                            <div class="form-group">
                                <label>Recepient Name</label>
                                <input type="" name="name" id="name" class="form-control" placeholder="Input name" required="" autocomplete="off">
                                <div class="invalid-feedback">
                                    You have to enter a valid name
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label>Select Group</label>
                                    <select class="mb-2 form-control" name="groupId">
                                        <option value="0">Select Group</option>
                                        <?php
                                        $selYear = $conn->query("SELECT * FROM group_tbl ORDER BY id DESC");
                                        if ($selYear->rowCount() > 0) {
                                            while ($selselYear = $selYear->fetch(PDO::FETCH_ASSOC)) { ?>
                                                <option value="<?php echo $selselYear['id']; ?>"><?php echo $selselYear['group_name']; ?></option>
                                            <?php }
                                        } else { ?>
                                            <option value="0">No Group Found</option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Recepient Location</label>
                                    <input type="" name="location" id="location" class="form-control" placeholder="Input location" required="" autocomplete="off">
                                    <div class="invalid-feedback">
                                        You have to enter a valid location
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Recepient Number</label>
                                    <input type="number" name="tell" id="tell" class="form-control" placeholder="Input number" required="" autocomplete="off">
                                    <div class="invalid-feedback">
                                        You have to enter a valid number
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea placeholder="Write your description here" required id="my-textarea" class=" form-control" name="description" rows="4"></textarea>
                                <div class="invalid-feedback">
                                    You have to enter a valid Description
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button name="save" type="submit" class="btn btn-primary">Add Now</button>
                            </div>
                        </div>
                </form>

            </div>

        </div>
        <hr>
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