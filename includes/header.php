<?php
include("conn.php");
include("query/selectData.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Topmax Online Examination System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Tables are the backbone of almost all web applications.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <script>
        $(document).ready(function() {
            var initCountdownValue = 1800;
            var intervalid = window.setInterval(function Redirect() {
                initCountdownValue--;
                if (initCountdownValue < 1) {
                    clearInterval(intervalid);
                    window.location.href = "query/logoutExe.php";
                }
            }, 1 * 1000);
        });
    </script>
</head>

<body id="body">
    <div class="app-container app-theme-black body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow navbar navbar-expand-lg navbar-dark bg-primary container-fluid">
            <div style="color: whitesmoke;" class="app-header__logo">

                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span style="width: 200%;" class="hamburger-inner">🔴🟡</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div style="color: whitesmoke;" class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger  hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span style="width: 200%;" class="hamburger-inner">🔴🟡</span>
                        </span>
                    </button>
                </div>
            </div>
            <div style="color: whitesmoke;" class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <a href="home.php" class="btn bg-info btn-primary">Topmax Dashboard</a>
            <div class="app-header__content">
                <div class="app-header-left">
                    <script>
                        document.getElementById("CopyRights").innerHTML =
                            'Website By <a  href="https://www.wesley.io.ke/" target="_blank" rel="noopener noreferrer">Wesley 🌍</a>';
                    </script>
                </div>
                <div class="app-header-right">
                    <!-- <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <a href="home.php" class="btn btn-primary">Dashboard</a>
                        </div>
                    </div>-->
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">

                                            <?php $image = (!empty($selExmneeData['photo'])) ? 'images/' . $selExmneeData['photo'] : 'images/profile.jpg';
                                            echo  '<img src="' . $image . '" class="user-image rounded-circle" width="42" alt="User Image"> ' ?>
                                            <?php
                                            echo strtoupper($selExmneeData['exmne_fullname']);
                                            //userEdit.php
                                            ?>
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a href="home.php?page=userEdit">
                                                <button type="button" tabindex="0" class="dropdown-item">My Account</button>
                                            </a>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a href="query/logoutExe.php" class="dropdown-item">LOG OUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>