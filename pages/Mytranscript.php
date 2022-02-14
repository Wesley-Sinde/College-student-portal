<?php
include("../conn.php");
session_start();
if (isset($_POST['Select_transcrip'])) {
    extract($_POST);
    $examName = preg_replace('/\s+/', '', (strtolower($courseSelected . $year_level . $Term_level . $YearSelected . $Academic_level)));
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topmax Online Examination System||Transcript</title>
    <link href="../main.css" rel="stylesheet">
    <link href="../css/sweetalert.css" rel="stylesheet">
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
</head>

<body class="body">


    <div style=" position: fixed; " class="app-header-right">
        <div class="header-btn-lg pr-0">
            <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="#" onclick="printDiv('printableArea');return false;" class=" nav-link">
                                <i target="_blank" class="nav-link-icon fa fa-database"> </i>
                                <!-- <input type="button" onclick="printDiv('printableArea')" value="print a div!" />-->
                                Print
                            </a>
                        </li>
                        <li class=" dropdown nav-item">
                            <a href="../home.php" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Home
                            </a>
                        </li>
                        <!-- <div class="widget-content-left">
                            <div class="btn-group">
                                <h5 style="padding-right: ;" class="card-title">My Transcript</h5>
                            </div>
                        </div>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="printableArea" id="printableArea" style="padding: 2%; padding-left: 4%;padding-right: 4%;">
        <div>
            <center>
                <img style="width:12%;" src="../images/topmax.png" alt="Topmax Logo">
                </br>
                </br>
                <h3 style="font-weight: bolder;">Topmax College</h3>
                <p style="color: black;">
                    P.O BOX 38521 - 00100 Nairobi. KENYA </br>
                    Tel. +2547 20 662 991 / 0719 429 208 / +2547 19 104 711 </br>
                    Email: info@topmaxtcollege@ac.ke / topmaxtcollege@gmail.com</br>
                    Website: www.topmaxcollege.ac.ke</br>
                <h4 style="font-weight: bolder;">
                    OFFICE OF REGISTRAR-ACADEMICS RESULT SLIP
                </h4>

                </p>
            </center>
            <div style="color:black; border-top: 2px solid black;border-bottom: 2px solid black; margin-bottom:7px; font-weight: bold;">
                <?php
                $exmneId = $_SESSION['examineeSession']['exmne_id'];
                // Select Data of examinee
                $selExmneeData = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
                //$exmneCourse =  $selExmneeData[''];
                ?>
                Name: <?php echo $selExmneeData['exmne_fullname']; ?></br>
                Reg No: <?php echo $selExmneeData['Reg_No'];  ?></br>
                School: <?php echo $selExmneeData['School']; ?></br>
                Program: <?php
                            $selExmneecourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id ='$courseSelected' ")->fetch(PDO::FETCH_ASSOC);
                            echo $selExmneecourse['cou_name'];
                            ?></br>
                Class: <?php echo $selExmneeData['Class'] ?></br>
                Admission Year: <?php echo $selExmneeData['Admission_Year']  ?></br>
                Academic Level: <?php echo $Academic_level ?></br>
                Year Of Study: <?php echo $year_level . " " . $Term_level  ?></br>
            </div>
        </div>
        <div class="table-responsive">
            <table CELLSPACING=0 id="tableList" class="mb-0 table table-borderless" style="border: none;">


                <thead>
                    <tr class="card-body">
                        <th style="width:15%;color: black;background-color: white; ">
                            Course Code
                        </th>
                        <th style="width:55%;color: black;background-color: white; ">
                            Course Description
                        </th>
                        <th style="width:15%;color: black;background-color: white; ">
                            Marks
                        </th>
                        <th style="width:15%;color: black;background-color: white; ">
                            Grade
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $exmneId = $_SESSION['examineeSession']['exmne_id'];
                    //echo $exmneId;
                    $query0 = $conn->query("SELECT * FROM units_code where examName='$examName' ORDER BY Id ASC");
                    $myLoop = 0;
                    $query1 = $conn->query("SELECT * FROM $examName where exmne_id='$exmneId' ORDER BY ID ASC");
                    if ($query1->rowCount() > 0) {
                        # get student row
                        $row_Std = $query1->fetch(PDO::FETCH_ASSOC);
                        if ($query0->rowCount() > 0) {
                            while ($row = $query0->fetch(PDO::FETCH_ASSOC)) {
                                $myLoop += 1;
                                $RowMarks = 0;
                                $state = 1;
                                $err = false;
                    ?>
                                <tr style="color: black;background-color:white; ">
                                    <td> <label class=""><?php echo $row['unit_code']; ?></label></td>
                                    <td> <label class=""><?php echo $row['Unit']; ?></label></td>
                                    <!--my static fn starts here -->
                                    <td> <label class="">
                                            <?php
                                            if ($myLoop <= 1) {

                                                is_null($row_Std['Unit1']) ? print_r("*") & $err = true : $RowMarks = $RowMarks + $row_Std['Unit1'];

                                                is_null($row_Std['unit1asgn']) ? print_r("*") &  $err = true   : $RowMarks = $RowMarks + $row_Std['unit1asgn'];

                                                is_null($row_Std['unit1cat']) ? print_r("*") &  $err = true   : $RowMarks = $RowMarks + $row_Std['unit1cat'];
                                            } elseif ($myLoop <= 2) {
                                                is_null($row_Std['Unit2']) ? print_r("*") & $err = true  : $RowMarks = $RowMarks + $row_Std['Unit2'];

                                                is_null($row_Std['unit2asgn']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit2asgn'];

                                                is_null($row_Std['unit2cat']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit2cat'];
                                            } elseif ($myLoop <= 3) {
                                                is_null($row_Std['Unit3']) ? print_r("*") & $err = true  : $RowMarks = $RowMarks + $row_Std['Unit3'];

                                                is_null($row_Std['unit3asgn']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit3asgn'];

                                                is_null($row_Std['unit3cat']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit3cat'];
                                            } elseif ($myLoop <= 4) {
                                                is_null($row_Std['Unit4']) ? print_r("*") & $err = true  : $RowMarks = $RowMarks + $row_Std['Unit4'];

                                                is_null($row_Std['unit4asgn']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit4asgn'];

                                                is_null($row_Std['unit4cat']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit4cat'];
                                            } elseif ($myLoop <= 5) {
                                                is_null($row_Std['Unit5']) ? print_r("*") & $err = true  : $RowMarks = $RowMarks + $row_Std['Unit5'];

                                                is_null($row_Std['unit5asgn']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit5asgn'];

                                                is_null($row_Std['unit5cat']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit5cat'];
                                            } elseif ($myLoop <= 6) {
                                                is_null($row_Std['Unit6']) ? print_r("*") & $err = true  : $RowMarks = $RowMarks + $row_Std['Unit6'];

                                                is_null($row_Std['unit6asgn']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit6asgn'];

                                                is_null($row_Std['unit6cat']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit6cat'];
                                            } elseif ($myLoop <= 7) {
                                                is_null($row_Std['Unit7']) ? print_r("*") & $err = true  : $RowMarks = $RowMarks + $row_Std['Unit7'];

                                                is_null($row_Std['unit7asgn']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit7asgn'];

                                                is_null($row_Std['unit7cat']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit7cat'];
                                            } elseif ($myLoop <= 8) {
                                                is_null($row_Std['Unit8']) ? print_r("*") & $err = true  : $RowMarks = $RowMarks + $row_Std['Unit8'];

                                                is_null($row_Std['unit8asgn']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit8asgn'];

                                                is_null($row_Std['unit8cat']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit8cat'];
                                            } elseif ($myLoop <= 9) {
                                                is_null($row_Std['Unit9']) ? print_r("*") & $err = true  : $RowMarks = $RowMarks + $row_Std['Unit9'];

                                                is_null($row_Std['unit9asgn']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit9asgn'];

                                                is_null($row_Std['unit9cat']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit9cat'];
                                            } elseif ($myLoop <= 10) {
                                                is_null($row_Std['Unit10']) ? print_r("*") & $err = true  : $RowMarks = $RowMarks + $row_Std['Unit10'];

                                                is_null($row_Std['unit10asgn']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit10asgn'];

                                                is_null($row_Std['unit10cat']) ? print_r("*") & $err = true    : $RowMarks = $RowMarks + $row_Std['unit10cat'];
                                            } else {
                                                echo ('An error occured');
                                            }
                                            if ($err != true) {
                                                echo $RowMarks;
                                            }

                                            ?></label></td>
                                    <td> <label class="">
                                            <?php
                                            if ($err != true) {
                                                if ($state = 1) {
                                                    //echo  $get_Grade($RowMarks, "A");
                                                    // echo $row['Unit'];
                                                    if ($RowMarks >= 70) {
                                                        $grade = "A";
                                                    } elseif ($RowMarks >= 60) {
                                                        $grade = "B";
                                                    } elseif ($RowMarks >= 50) {
                                                        $grade = "C";
                                                    } elseif ($RowMarks >= 40) {
                                                        $grade = "D";
                                                    } else {
                                                        $grade = "F";
                                                    }
                                                    echo ($grade);
                                                } else {
                                                    echo ('*');
                                                }
                                            }
                                            ?></label></td>

                                </tr>
                    <?php }
                        }
                    } else {
                        echo ('<h4 style="color: white;background-color:red; " >Sorry, We did not find your exam in the database.</h4>');
                    } ?>
                </tbody>
            </table>
            <div style="border-top: 2px solid black;color:black; "></div>
            <br>
            <div>
                <div style="display: flex;">
                    <div style="display: flexbox;  width:45%" class="col-lg-6">
                        <div class="">
                            <div class="">
                                <table style="color: black;" class="mb-0 table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>GRADE</th>
                                            <th>POINTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>70-100</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>60-69</td>
                                            <td>B</td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td>50-59</td>
                                            <td>C</td>
                                        </tr>
                                        <tr>
                                            <td>40-49</td>
                                            <td>D</td>
                                        </tr>
                                        <tr>
                                            <td>0-39</td>
                                            <td>F</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div style="display: flexbox; width:45%;color:black; " class="col-lg-6">
                        <div class="">
                            <div class="">
                                <table style="color: black;" class="mb-0 table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>SYMBOL</th>
                                            <th>NAMES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#</td>
                                            <td>Audited Unit</td>
                                        </tr>
                                        <tr>
                                            <td>|</td>
                                            <td>Retake</td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td>CT</td>
                                            <td>Credit Transfer</td>
                                        </tr>
                                        <tr>
                                            <td>*</td>
                                            <td>Incomplete</td>
                                        </tr>
                                        <tr>
                                            <td>N/A</td>
                                            <td>Mark Type Not Applicable</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <p>Head of Department:_____________________________________________________ Sign_________________________Date_________________________ <br>
                NB: This result slip is issued without any arasures or alteations. Not Valid Without Official Stamp.
            </p>
        </div>

        <br>


    </div>
    <!--<ul class=" nav nav-pills nav-justified">
                <a href="../home.php" class="nav-link active"><i class="nav-link-icon pe-7s-settings"> </i>Home</a>
                </ul>-->
</body>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="../assets/scripts/main.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/myjs.js"></script>
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../js/sweetalert.js"></script>
<?php
@$output = $_GET['output'];
if ($output != '') {
    if ($output == "ok") {
?>
        <script>
            Swal.fire(
                "Success",
                "Updated successfully",
                "success"
            );
        </script>
    <?php
    } elseif ($output == "err") {
    ?>
        <script>
            Swal.fire(
                "Error occured",
                "We have a problem with conneting to the database. Kindly counsult your technitian",
                "error"
            );
        </script>
<?php
    }
}
?>

</html>