<?php
session_start();

if (!isset($_SESSION['examineeSession']['examineenakalogin']) == true) header("location:index.php");


?>
<link rel="stylesheet" href="css\cssChat.css">
<?php include("conn.php"); ?>
<!-- HEADER -->
<?php include("includes/header.php"); ?>

<!-- UI THEME  -->
<?php include("includes/ui-theme.php"); ?>

<div class="app-main">
  <!-- sidebar   -->
  <?php include("includes/sidebar.php"); ?>


  <?php
  @$page = $_GET['page'];


  if ($page != '') {
    if ($page == "exam") {
      include("pages/exam.php");
    } else if ($page == "result") {
      include("pages/result.php");
    } else if ($page == "myscores") {
      include("pages/myscores.php");
    } else if ($page == "userEdit") {
      include("pages/userEdit.php");
    } else if ($page == "ExamUpload") {
      include("pages/upload_download/index.php");
    } else if ($page == "selectMytransclipt") {
      include("pages/StdTranscriptSelection.php");
    } else if ($page == "feeStatement") {
      include("pages/feeStatement.php");
    } else if ($page == "messages") {
      include("pages/messages.php");
    } else if ($page == "Mytransclipt") {
      include("pages/Mytranscript.php?.examename='$examename'");
    } else if ($page == "moreMessages") {
      include("pages/moreMessages.php");
    } else if ($page == "newsAndEvents") {
      include("pages/newsAndEvents.php");
    } else if ($page == "newsAndEventsMore") {
      include("pages/newsAndEventsMore.php");
    } else if ($page == "chatSystem") {
      include("pages/chatSystem.php");
    } else if ($page == "reporting") {
      include("pages/reporting.php");
    } else if ($page == "units") {
      include("pages/units.php");
    } else if ($page == "Clearance") {
      include("pages/Clearance.php");
    } else if ($page == "repo") {
      include("pages/repo.php");
    }
  }
  // Else only home  page no display
  else {
    include("pages/home.php");
  }


  ?>

  <?php include("includes/modals.php"); ?>
  <?php include("includes/footer.php"); ?>
  <script>
    document.getElementById("CopyRights").innerHTML ='Website By <a  href="https://www.wesley.io.ke/" target="_blank"  rel="noopener noreferrer">Wesley 🌍</a>';
  </script>
  <script type="text/javascript" src="js\scrriptchat.js"></script>