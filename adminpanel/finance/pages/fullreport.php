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
                    <input name="page" type="hidden" value="fullreport">
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
                        Full Report From Students
                    </div>

                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Payee</th>
                                    <th>Ammount</th>
                                    <th>Payment Mode</th>
                                    <th>Description</th>
                                    <th>Ref</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                @$todt = $_GET['to'];
                                @$fromdt = $_GET['from'];
                                if ($todt != '' & $fromdt != '') {
                                    $selExmnefee = $conn->query("SELECT * FROM examnee_fee_invoices where created between '$fromdt' and '$todt' ORDER BY id DESC ");
                                } else {
                                    $selExmnefee = $conn->query("SELECT * FROM examnee_fee_invoices ORDER BY id DESC ");
                                }


                                $TotalPaidAmmount = 0;
                                if ($selExmnefee->rowCount() > 0) {
                                    while ($selExmneRow = $selExmnefee->fetch(PDO::FETCH_ASSOC)) {
                                        $bal = $selExmneRow['ammount'];

                                        if ($bal > 0) {
                                            $TotalPaidAmmount += $bal;
                                ?>
                                            <tr>
                                                <td><?php echo $selExmneRow['id']; ?></td>
                                                <td><?php echo $selExmneRow['payee']; ?></td>
                                                <td><?php echo $selExmneRow['ammount']; ?></td>
                                                <td><?php echo $selExmneRow['payment_mode']; ?></td>
                                                <td><?php echo $selExmneRow['Description']; ?></td>
                                                <td><?php echo $selExmneRow['Ref']; ?></td>
                                                <td><?php echo date('Y-m-d', strtotime($selExmneRow['created']));   ?></td>
                                            </tr>
                                    <?php }
                                    }
                                } else { ?>
                                    <tr>
                                        <td colspan="3">
                                            <h3 class="p-3">No Report Found From Students</h3>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <center>
                        <div class="col-lg-2 col-xl-8">
                            <div class="card mb-3 widget-content bg-happy-green">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total Payment</div>
                                        <div class="widget-subheading">From Students</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-dark"><span>Ksh:<?php echo "  " . $TotalPaidAmmount . "/=" ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>


                    <div class="card-header">
                        Expenditure Full Report
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                                <tr>
                                    <!-- id`, `ref`, `description` `ammount`, `created` -->
                                    <th>Name</th>
                                    <th>Ref</th>
                                    <th>Description</th>
                                    <th>ammount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($todt != '' & $fromdt != '') {
                                    $selExpfull = $conn->query("SELECT * FROM expenditure where created between '$fromdt' and '$todt' ORDER BY id DESC ");
                                } else {
                                    $selExpfull = $conn->query("SELECT * FROM expenditure ORDER BY created ASC ");
                                }

                                $TotalexpenditureAmmount = 0;
                                if ($selExpfull->rowCount() > 0) {
                                    while ($selExp = $selExpfull->fetch(PDO::FETCH_ASSOC)) {
                                        $TotalexpenditureAmmount += $selExp['ammount'];
                                ?>
                                        <tr>
                                            <td><?php echo $selExp['payee']; ?></td>
                                            <td><?php echo $selExp['ref']; ?></td>
                                            <td><?php echo $selExp['description']; ?></td>
                                            <td><?php echo $selExp['ammount']; ?></td>
                                            <td><?php echo date('Y-m-d', strtotime($selExp['created']));  ?></td>
                                        </tr>
                                    <?php }
                                } else { ?>
                                    <tr>
                                        <td colspan="3">
                                            <h3 class="p-3">No Report Found From Expenditure</h3>
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
                                            <div class="widget-heading">Total From</div>
                                            <div class="widget-subheading">Expenditure</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-dark"><span>Ksh:<?php echo "  " . $TotalexpenditureAmmount . "/=" ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                        <hr>
                        <center>
                            <div class="col-lg-2 col-xl-8">
                                <div class="card mb-3 widget-content bg-night-fade">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Liquid</div>
                                            <div class="widget-subheading">Money Remaining</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-dark"><span>Ksh:<?php echo "  " . ($TotalPaidAmmount - $TotalexpenditureAmmount) . "/=" ?></span></div>
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