<?php
if (isset($_POST['submitFeePay']) != "") {
    extract($_POST);
    $fId = $_SESSION['finance']['finance_id'];
    //`ref`, `description`, `userId`, `ammount`, `created`payee,payment_mode,b 

    $insData = $conn->query("INSERT INTO expenditure(userId,payee,ammount,payment_mode,description,Ref)
     VALUES('$fId','$payee','$ammount','$payment_mode','$description','$Ref')");
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
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div style="border-bottom: 1px solid rgba(2, 145, 240, 0.3);">Make expenditure</div>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    Record Here 👇
                </div>
                <div class="printableArea" id="printableArea" style="padding: 2%; padding-left: 4%;padding-right: 4%;">
                    <div style="padding: 2%;background-color: white">
                        <form action="" style="background-color: white;" method="post" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-5 mb-3">
                                    <label>Paid To</label>
                                    <input type="" name="payee" class="form-control" required="">
                                    <small id="helpId" class="form-text text-muted">Enter the name of the one/expense you are paying </small>
                                    <div class="valid-feedback">
                                        Correct!
                                    </div>
                                    <div class="invalid-tooltip">
                                        Please choose a valid Name Of The person/expense.
                                    </div>
                                </div>
                                <div class="col-md-5 mb-3">
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
                                <div class="col-md-5 mb-3">
                                    <label>Ammount To Pay</label>
                                    <input type="number" name="ammount" class="form-control" required="">
                                    <small id="helpId" class="form-text text-muted">Enter ammount you're paying out</small>
                                    <div class="valid-feedback">
                                        Correct!
                                    </div>
                                    <div class="invalid-tooltip">
                                        Please choose a valid ammount.
                                    </div>
                                </div>
                                <div class="col-md-5 mb-3">
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
                                    <input style="width: 100%;" type="text" name="description" class="form-control" required="">
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
                                <input class="btn btn-sm btn-primary btn-transition" type="submit" name="submitFeePay" value="🔴 Add Record">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>