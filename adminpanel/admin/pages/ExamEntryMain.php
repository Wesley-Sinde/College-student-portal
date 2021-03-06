<?php
include("../../../conn.php");
//$examName = "65firstyearfirstterm1artsan";
if (isset($_POST['Select_Course'])) {
    //include("../../../includes/header.php");
    extract($_POST);
    $examName = preg_replace('/\s+/', '', (strtolower($courseSelected . $year_level . $Term_level . $YearSelected . $Academic_level)));
    //include("../../../conn.php");
    $query = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_year_level='$year_level' and Term='$Term_level' and exmne_course='$courseSelected' and Academic_level='$Academic_level' ORDER BY exmne_id DESC");
    if ($query->rowCount() > 0) {
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $Reg_No = $row['Reg_No'];
            $checkIfExist = $conn->query("SELECT * FROM $examName WHERE Reg_No='$Reg_No'");
            if ($checkIfExist->rowCount() < 1) {
                $query1 = $conn->query("insert into $examName (Reg_No)values('$Reg_No')");
                //$insData = $conn->query("INSERT INTO $examName(exmne_id) VALUES('$exmne_id')");
            }
        }
    }
    //$myUrl = 'location: pages/ExamEntryMain.php?' . $examName;
    // header($myUrl);
}
@$examNames = $_GET['examName'];
if ($examNames != '') {
    $examName = preg_replace('/\s+/', '', (strtolower($examNames)));
}
//echo ($examName);
?>
<!doctype html>

<head>
    <title>Topmax Online Examination System||Mark Entry</title>
    <link href="../../../main.css" rel="stylesheet">
    <link href="../../../css/sweetalert.css" rel="stylesheet">
</head>

<body class="body">

    <div class="app-header header-shadow">
        <div class="app-header__content">
            <div class="app-header-left">
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type Reg no to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
                <ul class="header-menu nav">
                    <li class="nav-item">
                        <a href=";" class="nav-link">
                            <i class="nav-link-icon fa fa-database"> </i>
                            Statistics
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-link-icon fa fa-cog"></i>
                            Settings
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="../home.php" class="nav-link">
                            <i class="nav-link-icon fa fa-cog"></i>
                            Home
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <h5 style="padding-right: 3%;" class="card-title">Main Exam Entry</h5>
    </div>
    </div>
    <div class="table-responsive">
        <table id="tableList" class="mb-0 table mb-0 table table-bordered table-striped needs-validation">


            <thead>
                <tr class="card-body">
                    <?php
                    $query0 = $conn->query("SELECT * FROM units_code where examName='$examName' ORDER BY Id ASC");
                    if ($query0->rowCount() > 0) { ?>
                        <th style="color: white;background-color: rgb(0, 129, 161); " align="center">
                            STD Reg No
                        </th>
                        <?php
                        //echo (($query0->rowCount())." Number");
                        while ($row = $query0->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <th style="color: white;background-color: rgb(0, 129, 161); " align="center">
                                <?php echo $row['Unit'];
                                $result[] = $row['Unit_Assigned_Name'];
                                //echo $row['Unit_Assigned_Name'];
                                // Array of all column names
                                //$columnArr = array_column($result, 'COLUMN_NAME'); 
                                ?>

                            </th>
                    <?php }

                        $arrlengthw = count($result);
                    } ?>
                    <th style="color: white;background-color: rgb(0, 129, 161); " align="center">
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query1 = $conn->query("SELECT * FROM $examName ORDER BY ID ASC");
                if ($query1->rowCount() > 0) {
                    while ($selrow = $query1->fetch(PDO::FETCH_ASSOC)) {
                ?>
                        <div class="form-row">
                            <tr>
                                <form method="post" id="productForm" action="../query/updateExamineeMarksExe.php" class="needs-validation">

                                    <div class="col-md-6">
                                        <td style="  margin: 0;padding: 0;">
                                            <label class=""><?php echo $selrow['Reg_No']; ?></label>
                                            <input style="visibility: collapse; font-size: 1px;" type="" value=" <?php echo $selrow['ID']; ?>" name="ID">
                                            <input style="visibility: collapse; font-size: 1px;" type="" value=" <?php echo $examName; ?>" name="examName">
                                            <input style="visibility: collapse; font-size: 1px;" type="" value=" <?php echo $arrlengthw; ?>" name="arrlengthw">
                                            <br>
                                        </td>
                                    </div>
                                    <?php
                                    foreach ($result as $s) {
                                        // echo "Size is: $s<br />";
                                    ?>
                                        <div class="col-md-6">
                                            <td style="  margin: 0;padding: 0;">
                                                <?php $ValueToDisplay = $selrow[$s] ?>
                                                <input class="form-control needs-validation" style="border: none;" type="" value=" <?php echo $ValueToDisplay; ?>" name="<?php echo $s ?>" placeholder="Input Marks">
                                            </td>
                                        </div>
                                    <?php } ?>

                                    <td>
                                        <button class=" btn-transition btn btn-outline-success" style="padding: 0%;" name="Update" type="submit">???</button>
                                    </td>
                                </form>

                            </tr>
                        </div>
                    <?php }
                } else {
                    ?>
                    <script>
                        Swal.fire(
                            "No Record",
                            "No record found for the selected students",
                            "Add some students to the course"
                        );
                    </script>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <br>
    <!--<ul class="nav nav-pills nav-justified">
        <a href="../home.php" class="nav-link active"><i class="nav-link-icon pe-7s-settings"> </i>Home</a>
    </ul>-->
</body>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="../../../assets/scripts/main.js"></script>
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/myjs.js"></script>
<script type="text/javascript" src="../../../js/ajax.js"></script>
<script type="text/javascript" src="../../../js/sweetalert.js"></script>
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