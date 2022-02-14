<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();

if (!isset($_SESSION['finance']['adminfinancelogin']) == true) header("location:index.php");


?>
<?php include("../../conn.php"); ?>
<!--  HEADER -->
<?php include("includes/header.php"); ?>

<!-- UI THEME DIRI -->
<?php include("includes/ui-theme.php");
?>

<div class="app-main">
  <!-- sidebar diri  -->
  <?php include("includes/sidebar.php"); ?>



  <!-- Condition If Link In the page get clicked -->
  <?php
  @$page = $_GET['page'];


  if ($page != '') {
    if ($page == "FeePayment") {
      include("pages/FeePayment.php");
    } elseif ($page == "FeePaymentnow") {
      include("facebox_modal/FeePayment.php");
    } elseif ($page == "FeeStructure") {
      include("includes/FeeStructure.php");
    } elseif ($page == "FeeStatement") {
      include("pages/stdFeeStatement.php");
    } elseif ($page == "DuePayment") {
      include("pages/DuePayment.php");
    } elseif ($page == "PaymentReport") {
      include("pages/PaymentReport.php");
    } elseif ($page == "fullreport") {
      include("pages/fullreport.php");
    } elseif ($page == "expenditureReport") {
      include("pages/expenditureReport.php");
    } elseif ($page == "expenditure") {
      include("pages/expenditure.php");
    }
  }
  // Else to load  home  page display
  else {
    include("pages/home.php");
  }

  include("query/feerefresh.php");

  ?>
  <script>
    document.getElementById("CopyRights").innerHTML = 'Website By <a  href="https://www.wesley.io.ke/" target="_blank"  rel="noopener noreferrer">Wesley 🌍</a>';
  </script>
  <!-- MAO NI IYA FOOTER -->