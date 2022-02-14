<?php
$id = $_GET['id'];
?>
<style>
    table {
        border-spacing: 0;
        /* Removes the cell spacing via CSS */
        border-collapse: collapse;
        BORDER: 0;
        border-collapse: collapse;
        border-spacing: 0;
    }

    @page {
        size: A4 portrait;
    }

    div.printableArea {
        width: 100%;
        height: 100%;
        size: A4 portrait;
    }

    @media print {
        @page {
            margin: 0;
        }

        .printableArea {
            margin: 1.6cm;
            color: black;
        }
    }

    table * {
        border: 0px;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    table td {
        border: 0px;
        /* Style just to show the table cell boundaries */
    }
</style>
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div style="border-bottom: 1px solid rgba(2, 145, 240, 0.3);">Student Fee Statement</div>
                </div>
            </div>
        </div>
        <div style="width: 10%;">
            <button onclick="printDiv('printableArea')" class="btn btn-primary btn-round waves-effect waves-light" data-v-11b11fab>
                <i style="color: white;" class="fa fa-print" data-v-11b11fab>
                    Download
                </i>
            </button>
        </div>
        <hr>
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    Fee Statement
                </div>
                <div class="printableArea" id="printableArea" style="padding: 2%; padding-left: 4%;padding-right: 4%;">
                    <div>
                        <center>
                            <img style="width:12%;" src="../../images/topmax.png" alt="Topmax Logo">
                            </br>
                            </br>
                            <h3 style="font-weight: bolder;">Topmax College</h3>
                            <p style="color: black;">
                                P.O BOX 38521 - 00100 Nairobi. KENYA </br>
                                Tel. +2547 20 662 991 / 0719 429 208 / +2547 19 104 711 </br>
                                Email: info@topmaxtcollege@ac.ke / topmaxtcollege@gmail.com</br>
                                Website: www.topmaxcollege.ac.ke</br>
                            <h4 style="font-weight: bolder;">
                                OFFICE OF FINANCE-ACADEMICS FEE STATEMENT
                            </h4>

                            </p>
                        </center>
                        <div style="color:black; border-top: 2px solid black;border-bottom: 2px solid black; margin-bottom:7px; font-weight: bold;">
                            <?php
                            $exmneId = $_SESSION['examineeSession']['exmne_id'];
                            // Select Data of examinee
                            $selExmneeData = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$id' ")->fetch(PDO::FETCH_ASSOC);
                            //$exmneCourse =  $selExmneeData[''];
                            ?>
                            Name: <?php echo $selExmneeData['exmne_fullname']; ?></br>
                            Reg No: <?php echo $selExmneeData['Reg_No'];  ?></br>
                            School: <?php echo $selExmneeData['School']; ?></br>
                            Program: <?php
                                        $courseSelected = $selExmneeData['exmne_course'];
                                        $selExmneecourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id ='$courseSelected' ")->fetch(PDO::FETCH_ASSOC);
                                        echo $selExmneecourse['cou_name'];
                                        ?></br>
                            Class: <?php echo $selExmneeData['Class'] ?></br>
                            Admission Year: <?php echo $selExmneeData['Admission_Year']  ?></br>
                            Academic Level: <?php echo $selExmneeData['Academic_Level'] ?></br>
                            Year Of Study: <?php echo $selExmneeData['exmne_year_level']  . " " . $selExmneeData['Term']  ?></br>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Date</th>
                                    <th>Ref</th>
                                    <th>Description</th>
                                    <th>Debit (KES)</th>
                                    <th>Credit (KES) </th>
                                    <th>Payment Mode</th>
                                    <th>Balance (KES)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $No = 0;
                                $selExmne = $conn->query("SELECT * FROM examnee_fee_invoices where id='$id' ORDER BY id ASC ");
                                if ($selExmne->rowCount() > 0) {
                                    $bal = 0;
                                    $credittot = 0;
                                    $debittot = 0;
                                    while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) {
                                        $No++;
                                        $bal += $selExmneRow['ammount'];
                                ?>
                                        <tr>
                                            <?php
                                            $credit = 0;
                                            $debit = 0;
                                            if ($selExmneRow['ammount'] > 0) {
                                                $credit = $selExmneRow['ammount'];
                                                $debit = 0;
                                            } else {
                                                $credit = 0;
                                                $debit = 0 - $selExmneRow['ammount'];
                                            }

                                            $credittot += $credit;
                                            $debittot += $debit;
                                            ?>
                                            <td><?php echo $No ?></td>
                                            <td><?php echo date('Y-m-d', strtotime($selExmneRow['created'])); ?></td>
                                            <td><?php echo $selExmneRow['Ref']; ?></td>
                                            <td><?php echo $selExmneRow['Description']; ?></td>
                                            <td><?php echo $debit; ?></td>
                                            <td><?php echo $credit; ?></td>
                                            <td><?php echo $selExmneRow['payment_mode']; ?></td>
                                            <td><?php echo $bal; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <tr style="font-weight: bolder;">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>TOTAL</td>
                                        <td><?php echo $debittot; ?></td>
                                        <td><?php echo $credittot; ?></td>
                                        <td>N/L</td>
                                        <td><?php echo $bal; ?></td>
                                    </tr>
                                <?php
                                } else { ?>
                                    <tr>
                                        <td colspan="2">
                                            <h3 class="p-3">No Record Found</h3>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <p>Head of Department:_____________________________________________________ Sign_________________________Date_________________________ <br>
                        NB: This fee statement is issued without any arasures or alteations. Not Valid Without Official Stamp.
                    </p>
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