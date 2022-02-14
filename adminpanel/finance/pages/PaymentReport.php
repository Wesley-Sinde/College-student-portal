<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div style="padding: 0%; margin:0%;" class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div style="border-bottom: 1px solid rgba(2, 145, 240, 0.3); width:100%;">Fee Payment Report</div>
                </div>
            </div>

            <form action="home.php" method="get">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>From: </label>
                        <input class="form-control" type="date" name="from">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>To: </label><input class="form-control" type="date" name="to">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label style="color: transparent;">iugfy4v </label>
                        <input class=" form-control btn-success btn" style="color: white;" type="submit" value="Get Data 🔰" name="submit">
                    </div>
                    <input name="page" type="hidden" value="PaymentReport">
                </div>
            </form>
        </div>
        <div style="width: 10%;">
            <button onclick="printDiv('printableArea')" class="btn btn-primary btn-round waves-effect waves-light" data-v-11b11fab>
                <i style="color: white;" class="fa fa-print" data-v-11b11fab>
                    Download
                </i>
            </button>
        </div>

        <div class="printableArea" id="printableArea" style="padding: 2%; padding-left: 4%;padding-right: 4%;">


            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        Examinee List
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                                <tr>
                                    <th>Reg No </th>
                                    <th>Fullname</th>
                                    <th>Course</th>
                                    <th>Year level</th>
                                    <th>status</th>
                                    <th>Address</th>
                                    <th>School</th>
                                    <th>Class</th>
                                    <th>Fee Balance (Ksh)</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $TotalPaidAmmount = 0;
                                $selExmne = $conn->query("SELECT * FROM examinee_tbl ORDER BY exmne_id DESC ");
                                if ($selExmne->rowCount() > 0) {
                                    while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) {
                                        $bal = 0;
                                        $stdid = $selExmneRow['exmne_id'];

                                        @$todt = $_GET['to'];
                                        @$fromdt = $_GET['from'];
                                        if (
                                            $todt != '' & $fromdt != ''
                                        ) {
                                            $selExmnefee = $conn->query("SELECT * FROM examnee_fee_invoices where created between '$fromdt' and '$todt' and id='$stdid' ORDER BY id DESC  ");
                                        } else {
                                            $selExmnefee = $conn->query("SELECT * FROM examnee_fee_invoices where id='$stdid' ORDER BY id DESC ");
                                        }



                                        if ($selExmne->rowCount() > 0) {
                                            while ($selExmneRowfee = $selExmnefee->fetch(PDO::FETCH_ASSOC)) {
                                                $bal += $selExmneRowfee['ammount'];
                                            }
                                            if ($bal > 0) {
                                                $TotalPaidAmmount += $bal;
                                ?>
                                                <tr>
                                                    <td><?php echo $selExmneRow['Reg_No']; ?></td>
                                                    <td><?php echo $selExmneRow['exmne_fullname']; ?></td>
                                                    <td>
                                                        <?php
                                                        $exmneCourse = $selExmneRow['exmne_course'];
                                                        $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$exmneCourse' ")->fetch(PDO::FETCH_ASSOC);
                                                        echo $selCourse['cou_name'];
                                                        ?>
                                                    </td>

                                                    <td><?php echo $selExmneRow['exmne_year_level']; ?></td>
                                                    <td><?php echo $selExmneRow['exmne_status']; ?></td>
                                                    <td><?php echo $selExmneRow['address']; ?></td>
                                                    <td><?php echo $selExmneRow['School']; ?></td>
                                                    <td><?php echo $selExmneRow['Class']; ?></td>
                                                    <td><?php echo $bal; ?></td>
                                                    <td>
                                                        <a href="home.php?id=<?php echo $selExmneRow['exmne_id']; ?>&page=FeePaymentnow" class="btn btn-sm btn-primary pe-7s-cash"></a>

                                                    </td>
                                                </tr>
                                    <?php }
                                        }
                                    }
                                } else { ?>
                                    <tr>
                                        <td colspan="3">
                                            <h3 class="p-3">No Student Report Found Found</h3>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                        <hr>
                        <center>
                            <div class="col-lg-2 col-xl-8">
                                <div class="card mb-3 widget-content bg-happy-green">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Received From</div>
                                            <div class="widget-subheading">Fee Payment</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-dark"><span>Ksh:<?php echo "  " . $TotalPaidAmmount . "/=" ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
    <script src="js/print.js"></script>