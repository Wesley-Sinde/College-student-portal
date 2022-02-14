<?php
if (isset($_POST['submit']) != "") {
	$ex_id = $_POST['Unit_Code'];
	$name = $_FILES['file']['name'];
	$size = $_FILES['file']['size'];
	$type = $_FILES['file']['type'];
	$temp = $_FILES['file']['tmp_name'];
	// $caption1=$_POST['caption'];
	// $link=$_POST['link'];
	$fname = date("YmdHis") . '_' . $name;
	$chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
	if ($chk) {
		$i = 1;
		$c = 0;
		while ($c == 0) {
			$i++;
			$reversedParts = explode('.', strrev($name), 2);
			$tname = (strrev($reversedParts[1])) . "_" . ($i) . '.' . (strrev($reversedParts[0]));
			// var_dump($tname);exit;
			$chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
			if ($chk2 == 0) {
				$c = 1;
				$name = $tname;
			}
		}
	}
	$move =  move_uploaded_file($temp, "pages/upload_download/upload/" . $fname);
	if ($move) {
		$query = $conn->query("insert into upload(name,fname,cou_id)values('$name','$fname','$ex_id')");
		if ($query) {
			//header("location:pages/upload_download/index.php");

			$exmne_id = $_SESSION['examineeSession']['exmne_id'];
			//$exam_id = $ex_id;
			$insAttempt = $conn->query("INSERT INTO DOWN_exam_attempt(exmne_id,exam_id)  VALUES('$exmne_id','$ex_id') ");
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
<script type="text/javascript">
	function msg() {
	}
</script>
<script src="pages/upload_download/js/jquery.js" type="text/javascript"></script>
<script src="pages/upload_download/js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="pages/upload_download/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="pages/upload_download/js/DT_bootstrap.js"></script>

<style>
</style>

<body>
	<div class="app-main__outer">
		<div class="row-fluid">
			<div class="span12">
				<div class="container">
					<br />
					<h1>
						<p>Upload And Download Exam</p>
					</h1>
					<div class="app-header-left">
						<div class="search-wrapper">
							<div class="input-holder">
								<input type="text" class="search-input" placeholder="Type to search">
								<button class="search-icon"><span></span></button>
							</div>
							<button class="close"></button>
						</div>
						<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							<thead>
								<tr>
									<th width="30%" align="center">Files</th>
									<th width="50%" align="center">Upload a file</th>
									<th width="20%" align="center">Action</th>
								</tr>
							</thead>
							<?php
							$exmneId = $_SESSION['examineeSession']['exmne_id'];

							// Select Data of examinee
							$selExmneeData = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
							$exmneCourse =  $selExmneeData['exmne_course'];
							// Select the exam dependent on login 
							$query = $conn->query("select * from exam_download  WHERE cou_id='$exmneCourse' order by id desc");
							while ($row = $query->fetch()) {
								$name = $row['name'];
								$Unit_Code = $row['Unit_Code'];
								$exam_id = $row['Unit_Code'];
							?>


								<!--
	                          condition to exclude done exams
                            UIY-->
								<?php

								$exmne_id = $_SESSION['examineeSession']['exmne_id'];
								$selExAttempt = $conn->query("SELECT * FROM DOWN_exam_attempt WHERE exmne_id='$exmne_id' AND exam_id='$exam_id' ");
								if ($selExAttempt->rowCount() > 0) {
									//$res = array("res" => "alreadyTaken");
									//echo "alreadyTaken";
								} else {



								?>
									<tr>

										<td>
											&nbsp;<?php echo $name; ?>
										</td>

										<td>
											<form enctype="multipart/form-data" action="" name="form" method="post">
												Select File
												<input type="file" name="file" id="file" />
												<input type='hidden' name="Unit_Code" id="Unit_Code" value="<?php echo ($Unit_Code) ?>" />
												<input class="alert-success" type="submit" name="submit" id="submit" value="Submit" />
											</form>
										</td>


										<td>
											<button class="alert-success"><a href="pages/upload_download/download.php?filename=<?php echo $name; ?>&f=<?php echo $row['fname'] ?>">Download Exam</a></button>
											<br>
											<!--	<form enctype="multipart/form-data" action="pages\upload_download\Preview.php" name="form" method="post">
												<input type='hidden' name="fname" id="fname" value="<?php echo $row['fname'] ?>" />
												<input class="alert-success" type="submit" name="submit" id="submit" value="Preview" />
											</form>
										
								            -->
											<button class="alert-success"><a href="pages/upload_download/Preview.php?filename=<?php echo $name; ?>&f=<?php echo $row['fname'] ?>">Preview</a></button>

										</td>
									</tr>

								<?php } ?>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
</body>

</html>