<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();

if (!isset($_SESSION['admin']['adminnakalogin']) == true) header("location:index.php");
?>
<?php include("../../conn.php"); ?>
<!-- API -->
<?php include("apiLoad.php"); ?>
<!--  HEADER -->
<?php include("includes/header.php"); ?>
<!-- UI THEME DIRI -->
<?php include("includes/ui-theme.php");
?>
<div class="app-main">
  <!-- sidebar diri  -->
  <?php include("includes/sidebar.php"); ?>
  <!-- Condition If Link If the page get clicked -->
  <?php
  @$page = $_GET['page'];
  if ($page != '') {
    if ($page == "add-course") {
      include("pages/add-course.php");
    } else if ($page == "manage-course") {
      include("pages/manage-course.php");
    } else if ($page == "manage-exam") {
      include("pages/manage-exam.php");
    } else if ($page == "manage-examinee") {
      include("pages/manage-examinee.php");
    } else if ($page == "ranking-exam") {
      include("pages/ranking-exam.php");
    } else if ($page == "feedbacks") {
      include("pages/feedbacks.php");
    } else if ($page == "examinee-result") {
      include("pages/examinee-result.php");
    } else if ($page == "ExamUpload") {
      include("pages/upload_download/index.php");
    } else if ($page == "ExamDownload") {
      include("pages/upload_download/index.php");
    } else if ($page == "ExamDownloadadd") {
      include("pages/upload_download/indexupload.php");
    } else if ($page == "AddCourseUnits") {
      include("pages/AddCourseUnits.php");
    } else if ($page == "ExamEntryMainSelectClass") {
      $ReURL = "pages/ExamEntryMain.php";
      include("pages/ExamEntryMainSelectClass.php");
    } else if ($page == "ExamEntryCats") {
      $ReURL = "pages/ExamEntryCats.php";
      include("pages/ExamEntryMainSelectClass.php");
    } else if ($page == "ExamEntryAssign") {
      $ReURL = "pages/ExamEntryAssign.php";
      include("pages/ExamEntryMainSelectClass.php");
    } else if ($page == "createMessage") {
      include("pages/createMessage.php");
    } else if ($page == "CreateNews") {
      include("pages/CreateNews.php");
    } else if ($page == "addExamneee") {
      include("pages/addExamneee.php");
    } else if ($page == "updateExaminee") {
      include("facebox_modal/updateExaminee.php");
    } else if ($page == "CreateSchool") {
      include("pages/CreateSchool.php");
    } else if ($page == "CreateClass") {
      include("pages/CreateClass.php");
    } else if ($page == "CreateAcYr") {
      include("pages/CreateAcYr.php");
    }
    //messaging
    else if ($page == "smsApi") {
  ?>
      <link rel="stylesheet" href="css\cssChat.css">
    <?php
      include("pages/smsApi.php");
    } else if ($page == "messagingCenter") {
    ?>
      <link rel="stylesheet" href="css\cssChat.css">
    <?php
      include("pages/messagingCenter.php");
    } else if ($page == "addGroup") {
    ?>
      <link rel="stylesheet" href="css\cssChat.css">
    <?php
      include("pages/addGroup.php");
    } else if ($page == "MyPeople") {
    ?>
      <link rel="stylesheet" href="css\cssChat.css">
    <?php
      include("pages/MyPeople.php");
    } else if ($page == "MyPeopleData") {
    ?>
      <link rel="stylesheet" href="css\cssChat.css">
    <?php
      include("pages/MyPeopleData.php");
    } else if ($page == "chatSystem") {
    ?>
      <link rel="stylesheet" href="css\cssChat.css">
    <?php
      include("pages/chatSystem.php");
    } else if ($page == "editMygroup") {
    ?>
      <link rel="stylesheet" href="css\cssChat.css">
    <?php
      include("pages/editMygroup.php");
    } else if ($page == "groupSms") {
    ?>
      <link rel="stylesheet" href="css\cssChat.css">
    <?php
      include("pages/groupSms.php");
    } else if ($page == "stdCourse") {
    ?>
      <link rel="stylesheet" href="css\cssChat.css">
    <?php
      include("pages/stdCourse.php");
    } else if ($page == "stdyear") {
    ?>
      <link rel="stylesheet" href="css\cssChat.css">
    <?php
      include("pages/stdyear.php");
    } else if ($page == "feeDue") {
    ?>
      <link rel="stylesheet" href="css\cssChat.css">
  <?php
      include("pages/feeDue.php");
    }
  }
  // Else ang home nga page mo display
  else {
    include("pages/home.php");
  }


  ?>

  <!-- MAO NI IYA FOOTER -->
  <?php include("includes/footer.php"); ?>

  <?php include("includes/modals.php"); ?>
  <script>
  document.getElementById("CopyRights").innerHTML ='Website By <a href="https://www.wesley.io.ke/" target="_blank" rel="noopener noreferrer">Wesley 🌍</a>';
  </script>