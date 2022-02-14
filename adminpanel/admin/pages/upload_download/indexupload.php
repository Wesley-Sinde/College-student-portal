<?php
$conn = new PDO('mysql:host=localhost; dbname=exam', 'root', '') or die(mysql_error());
if (isset($_POST['submit']) != "") {
    $ex_id = $_POST['Unit_Code'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type = $_FILES['file']['type'];
    $temp = $_FILES['file']['tmp_name'];

    $courseSelected  = $_POST['courseSelected'];
    $Unit_Code = $_POST['Unit_Code'];
    // $caption1=$_POST['caption'];
    // $link=$_POST['link'];

    $exmne_id = $_SESSION['admin']['admin_id'];
    $fname = date("YmdHis") . '_' . $name;
    $chk = $conn->query("SELECT * FROM  exam_download where name = '$name' ")->rowCount();
    if ($chk) {
        $i = 1;
        $c = 0;
        while ($c == 0) {
            $i++;
            $reversedParts = explode('.', strrev($name), 2);
            $tname = (strrev($reversedParts[1])) . "_" . ($i) . '.' . (strrev($reversedParts[0]));
            // var_dump($tname);exit;
            $chk2 = $conn->query("SELECT * FROM  exam_download where name = '$tname' ")->rowCount();
            if ($chk2 == 0) {
                $c = 1;
                $name = $tname;
            }
        }
    }
    $move =  move_uploaded_file($temp, "../../pages/upload_download/upload/" . $fname);
    if ($move) {
        $query = $conn->query("insert into exam_download(name,fname,cou_id,admin_id,Unit_Code)values('$name','$fname','$courseSelected','$exmne_id','$Unit_Code')");
        if ($query) {
            $insAttempt = $conn->query("INSERT INTO DOWN_exam_teacher(exmne_id,exam_id)  VALUES('$exmne_id','$courseSelected') ");
            //	msg();
            //include("pages/upload_download/alertmsg.js");
        } else {
            die(mysql_error());
        }
    }
}
?>
<html>

<head>
    <title>Upload and Download Files</title>
    <link href="pages/upload_download/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="pages/upload_download/css/DT_bootstrap.css">
</head>
<script src="pages/upload_download/js/jquery.js" type="text/javascript"></script>
<script src="pages/upload_download/js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="pages/upload_download/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="pages/upload_download/js/DT_bootstrap.js"></script>

<style>
</style>

<body style="width:70%">
    <div class="app-main__outer">
        <div class="row-fluid">
            <div class="span12">
                <div class="container">
                    <br />
                    <h1>
                        <p>Upload Exam</p>
                    </h1>



                    <form enctype="multipart/form-data" action="" name="form" method="post">
                        <div style="width:60%" class="form-group">
                            <label>Select Course</label>
                            <select class="form-control" name="courseSelected">
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

                        <div style="width:60%" class="form-group">
                            <label>Course Code</label>
                            <input type="" name="Unit_Code" class="form-control" placeholder="Input Course Code" required="">
                        </div>
                        Select File </br>
                        <input type="file" class="" name="file" id="file" />
                        </br> </br>
                        <input class="alert-success form-control" type="submit" name="submit" id="submit" value="Submit" />
                    </form>




                </div>
            </div>
        </div>
    </div>
</body>

</html>