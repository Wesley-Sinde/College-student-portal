<link rel="stylesheet" href="css\cssChat.css">
<?php
// smsApi(name,smsApi)	VALUES('$name','$smsApi')");
$selData = $conn->query("SELECT * FROM smsApi WHERE name='partnerID' ")->fetch(PDO::FETCH_ASSOC);
$partnerID = $selData['smsApi'];

$selData = $conn->query("SELECT * FROM smsApi WHERE name='apikey' ")->fetch(PDO::FETCH_ASSOC);
$apikey = $selData['smsApi'];

$selData = $conn->query("SELECT * FROM smsApi WHERE name='shortcode' ")->fetch(PDO::FETCH_ASSOC);
$shortcode = $selData['smsApi'];
?>