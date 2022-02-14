<?php
if (isset($_POST['submitNew']) != "") {
    extract($_POST);
    $selFeeStructure = $conn->query("SELECT * FROM fee_structure WHERE level='$lavel' ");
    if ($selFeeStructure->rowCount() > 0) {
        $res = "exist";
?>

        <script>
            Swal.fire(
                "Failed",
                "Data already exist",
                "error"
            );
        </script>
        <?php
    } else {
        $insData = $conn->query("INSERT INTO fee_structure(level,ammount) VALUES('$lavel','$ammount')");
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
} elseif (isset($_POST['submitupdate']) != "") {
    extract($_POST);
    $insData = $conn->query("UPDATE fee_structure set level='$lavel' , ammount=$ammount where id='$id'");
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
                "Update Failed",
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
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div style="border-bottom: 1px solid rgba(2, 145, 240, 0.3);">MANAGE EXAMINEE</div>
                    <label style="color: transparent;">______</label>
                    <label style="border-left: 1px solid rgba(2, 145, 240, 0.3);color: transparent;">______</label>
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <form action="" method="get">
                                <input name="exmne_fullname" type="text" class="search-input" placeholder="Type Reg No To Search">
                                <input name="page" type="hidden" value="FeePayment">
                            </form>
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    Fee Structure
                </div>
                <div class="table-responsive">
                    <div id='loader' style='display: none;'>
                        <img src='../../Images/refresh.gif' width='32px' height='32px'>
                    </div>
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                        <thead>
                            <tr>
                                <th style='display: none;'>Id </th>
                                <th>Level</th>
                                <th>Tuition per Term</th>
                                <th>Last Update</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selExmne = $conn->query("SELECT * FROM fee_structure ORDER BY id DESC ");

                            if ($selExmne->rowCount() > 0) {
                                while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <form action="" method="post">
                                            <td style='display: none;'>
                                                <input style='display: none;' value="<?php echo $selExmneRow['id']; ?>" name="id">
                                                <?php echo $selExmneRow['id']; ?>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input value="<?php echo $selExmneRow['level']; ?>" class="form-control" type="text" name="lavel">
                                                </div>
                                            </td>
                                            <td>
                                                <input value="<?php echo $selExmneRow['ammount']; ?>" class="form-control" type="text" name="ammount">

                                                <!-- <?php echo $selExmneRow['ammount']; ?> -->
                                            </td>
                                            <td><?php echo date('Y-m-d', strtotime($selExmneRow['cou_created'])); ?></td>
                                            <td>
                                                <input class="btn-transition btn btn-outline-success" style="padding: 0%;" type="submit" name="submitupdate" value="✔">
                                            </td>
                                        </form>
                                    </tr>
                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="2">
                                        <h3 class="p-3">No Data Found</h3>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>


                <button class="btn btn-sm btn-primary add_another">Add New Entry</button>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                        <thead>
                            <tr>
                                <th>Id </th>
                                <th>Level</th>
                                <th>Tuition per Term</th>
                                <th>Date Of Update</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $loop = 3;
                            while ($loop < 4) {
                                $loop++ ?>
                                <tr>
                                    <form name="insertnewData" method="post">
                                        <td>system</td>
                                        <td><select class="mb-2 form-control" name="lavel" required>
                                                <option value="0">Select level</option>
                                                <option value="Artsan">Artsan</option>
                                                <option value="Certificate">Certificate</option>
                                                <option value="Diploma">Diploma</option>
                                            </select></td>
                                        <td><input class="form-control" type="number" name="ammount" required></td>
                                        <td><?php echo date('Y-m-d', strtotime(date_default_timezone_get())); ?></td>
                                        <td>
                                            <input class="btn-transition btn btn-outline-success" style="padding: 0%;" type="submit" name="submitNew" value="✔">
                                        </td>
                                    </form>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>


    </div>
    <script>
        function printDiv() {
            $("#tableList").append('<tr> <form action="/query/feeStructureUpdate.php" method="post"> <td>system</td><td><select class="mb-2 form-control" name="Academic_level" id="Academic_level" required><option value="0">Select level</option><option value="Artsan">Artsan</option><option value="Certificate">Certificate</option><option value="Diploma">Diploma</option></select></td><td><input id="ammount" class="form-control" type="number" name="ammount" required></td><td><?php echo date('Y-m-d', strtotime(date_default_timezone_get())); ?></td><td><a type="submit" class="btn btn-sm btn-primary" style="color:white;">Add</a><input type="submit" value="w"></td></form></tr>');
        }

        function printDiv(divName) {
            var dataString = $(`form[name=${divName}]`).serialize();
            console.log(dataString);
            $.ajax({
                type: "POST",
                url: "../query/feeStructureUpdate.php",
                data: dataString,
                success: function(data) {
                    $('.success').fadeIn(200).show();
                    $('.error').fadeOut(200).hide();
                    $("#data").html(data);
                }
            });

            event.preventDefault();
        };
        $(document).ajaxStart(function() {
            // Show image container
            $("#loader").show();
        });
        $(document).ajaxComplete(function() {
            // Hide image container
            $("#loader").hide();
        });
    </script>