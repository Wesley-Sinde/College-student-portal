<?php
//if (isset($_POST['submit']) != "") {
//  $fname = $_POST['fname'];
//echo '$fname ';
//echo ("Hello Javatpoint");
//Add header pdf file
$file = '/pages/upload_download/upload/' . $_REQUEST['f'];
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $file . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
//}
//
?>
