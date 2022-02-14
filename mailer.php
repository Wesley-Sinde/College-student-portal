<?php

include("conn.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

session_start();

if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $random_base64 = uniqid();
    $dir = __DIR__;
    $root = "";
    $dir = str_replace('\\', '/', realpath($dir));

    //HTTPS or HTTP
    $root .= !empty($_SERVER['HTTPS']) ? 'https' : 'http';

    //HOST
    $root .= '://' . $_SERVER['HTTP_HOST'];

    //ALIAS
    if (!empty($_SERVER['CONTEXT_PREFIX'])) {
        $root .= $_SERVER['CONTEXT_PREFIX'];
        $root .= substr($dir, strlen($_SERVER['CONTEXT_DOCUMENT_ROOT']));
    } else {
        $root .= substr($dir, strlen($_SERVER['DOCUMENT_ROOT']));
    }

    $root .= '/';

    // Hi sindewesley5,

    // Someone has requested a new password for the following account on DashboardPack:

    // Username: sindewesley5

    // If you didn't make this request, just ignore this email. If you'd like to proceed:

    // Click here to reset your password

    // Thanks for reading.

    //echo $root ;
    $username = strstr($email, '@', true); //"username"

    $MyUkey = 'passWordReset.php?u_key=' . $random_base64;

    $yourLink = "<a href=" . $root . $MyUkey . ">  Click Here!!!  </a>";
    $message = "<tr></td><td ><h2><font color = #346699>Hi " . $username . "\r\n" .
        "</font><h2></td></tr>Someone has requested a new password for the following account on <b>Topmax</b> 
    If you didn't make this request, just ignore this email.\r If you'd like to proceed: 
    You can reset your account using the following Link 👇 to reset your password 
    <tr></td><td ><h2><font color = #171c21>Thanks for reading.</font><h2></td></tr>
    <tr></td><td ><h2><font color = #346699>" . $yourLink . "</font><h2></td></tr>";


    // $selAcc = $conn->query("SELECT * FROM examinee_tbl WHERE Reg_No='$username'  ");
    // $selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);
    // if ($selAcc->rowCount() > 0) {

    $selExmneeData = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_email='$email ' ");
    $selAccRow = $selExmneeData->fetch(PDO::FETCH_ASSOC);
    if ($selExmneeData->rowCount() > 0) {
        $exmnId = $selAccRow['exmne_id'];
        $insertDAta = $conn->query("INSERT into  passreset  (u_id, u_key) VALUES ('$exmnId','$random_base64')");
        //Load composer's autoloader

        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'wesytry5@gmail.com';
            $mail->Password = '+254711971251';
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            //Send Email
            $mail->setFrom('wesytry5@gmail.com');

            //Recipients
            $mail->addAddress($email);
            $mail->addReplyTo('wesytry5@gmail.com');

            $imgs = $root . "images/topmax.png";


            //Content
            $mail->isHTML(true);
            $headers = "Content-Type: text/html; charset=UTF-8\r\n";
            $headers .= 'From: Topmax College' . "\r\n";
            $body = "<table  width=100% border=0><tr><td>";
            $body .= "'</td><td style=position:absolute;left:50;top:60;><h2 background-color=#4d1c4f><font  color = #346699>TOPMAX COLLEGE.</font><h2></td></tr>";
            //$Body .= $message;
            $mail->Subject = $subject;
            $mail->Body = $body . $message; // = $message;
            $mail->headers = $headers;

            $mail->send();

            $_SESSION['result'] = 'Message has been sent to your email. Check on your email on how to reset password';
            $_SESSION['status'] = 'ok';
            //echo  'Message has been sent to your email. Check on your email on how to reset password';

            function imageUrl()
            {
                return "http://" . $_SERVER['SERVER_NAME'] . substr(
                    $_SERVER['SCRIPT_NAME'],
                    0,
                    strrpos($_SERVER['SCRIPT_NAME'], "/") + 1
                ) . "images/topmax.png";
            }
        } catch (Exception $e) {
            $_SESSION['result'] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            $_SESSION['status'] = 'error';
            //echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }
    } else {
        $_SESSION['result'] = 'No email was fount related to this account, ENTER CORRECT EMAIL. System Error: ';
        $_SESSION['status'] = 'error';
        //echo 'No email was fount related to this account, ENTER CORRECT EMAIL. System Error: ' . $email;
    }
}
header("location: forgotPassword.php");
$_SESSION['try'] = $random_base64;;
?>
<script>
    alert(<?php echo $MyUkey; ?>)
</script>