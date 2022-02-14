<?php
include("query\selectData.php");
?>
<div style="background-color: white;" class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">


                <li class="app-sidebar__heading">AVAILABLE ONLINE EXAM'S</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        All Exam's
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <?php

                        if ($selExam->rowCount() > 0) {
                            while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                <li>
                                    <a href="#" id="startQuiz" data-id="<?php echo $selExamRow['ex_id']; ?>">
                                        <?php
                                        $lenthOfTxt = strlen($selExamRow['ex_title']);
                                        if ($lenthOfTxt >= 23) { ?>
                                            <?php echo substr($selExamRow['ex_title'], 0, 20); ?>.....
                                        <?php } else {
                                            echo $selExamRow['ex_title'];
                                        }
                                        ?>
                                    </a>
                                </li>
                            <?php }
                        } else { ?>
                            <a href="#">
                                <i class="metismenu-icon"></i>No Exam's @ the moment
                            </a>
                        <?php }
                        ?>


                    </ul>
                </li>

                <a href="home.php?page=ExamUpload">
                    <li class="app-sidebar__heading">
                        <object data="images\online-2.svg" width="7%">
                        </object>ONLINE TAKE AWAY EXAM'S
                    </li>
                </a>

                <li class="app-sidebar__heading">
                    <object data="images\online.svg" width="7%">
                    </object>
                    ONLINE TAKEN EXAM'S
                </li>
                <li>
                    <?php
                    $selTakenExam = $conn->query("SELECT * FROM exam_tbl et INNER JOIN exam_attempt ea ON et.ex_id = ea.exam_id WHERE exmne_id='$exmneId' ORDER BY ea.examat_id  ");

                    if ($selTakenExam->rowCount() > 0) {
                        while ($selTakenExamRow = $selTakenExam->fetch(PDO::FETCH_ASSOC)) { ?>
                            <a href="home.php?page=result&id=<?php echo $selTakenExamRow['ex_id']; ?>">

                                <?php echo $selTakenExamRow['ex_title']; ?>
                            </a>
                        <?php }
                    } else { ?>
                        <a href="#" class="pl-3">You are not taking exam yet</a>
                    <?php }

                    ?>


                </li>

                <a href="home.php?page=selectMytransclipt">
                    <li class="app-sidebar__heading"><i style="color: black; width:10%;" class="pe-7s-credit"></i>MY TRANSCRIPT</li>
                </a>

                <a href="home.php?page=feeStatement">
                    <li class="app-sidebar__heading">
                        <object data="images\money.svg" width="7%">
                        </object>
                        Fee Statement
                    </li>
                </a>

                <a class="app-sidebar__heading" href="home.php?page=messages">
                    <svg style="width: 7%;" aria-hidden="true" data-prefix="fas" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-comments fa-w-18">
                        <path fill="black" d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z" class=""></path>
                    </svg> Messages:
                    <span class="badge badge-pill badge-danger ml-0 mr-2">
                        <?php
                        $Id = $_SESSION['examineeSession']['exmne_id'];
                        $Messagecount = $conn->query("SELECT * FROM messages WHERE (messageId='$Id' or messageID='0') and isRead='0' ORDER BY id DESC");
                        echo $Messagecount->rowCount();
                        ?>
                    </span>
                </a>
                <a href="home.php?page=newsAndEvents">
                    <li class="app-sidebar__heading"><i style="color: black; width:10%" class="pe-7s-world"></i>News & Events
                        <span class="badge badge-pill badge-success">
                            <?php
                            $Id = $_SESSION['examineeSession']['exmne_id'];
                            $Messagecount = $conn->query("SELECT * FROM newsAndEvents WHERE created > now() - INTERVAL 90 DAY ORDER BY created DESC ");
                            echo $Messagecount->rowCount();
                            ?>
                        </span>
                    </li>
                </a>
                <a href="home.php?page=chatSystem">
                    <li class="app-sidebar__heading"><i style="color: black; width:10%" class="pe-7s-safe"></i>Chat Spot</li>
                </a>
                <a href="home.php?page=repo">
                    <li class="app-sidebar__heading"><i style="color: black; width:10%" class="pe-7s-safe"></i>Repository</li>
                </a>
                <a href="home.php?page=Clearance">
                    <li class="app-sidebar__heading"><i style="color: black; width:10%" class="pe-7s-albums"></i>Clearance</li>
                </a>
                <!-- <a href="home.php?page=">
                    <li class="app-sidebar__heading"><i style="color: black; width:10%" class="pe-7s-portfolio"></i>Evaluation</li>
                </a> -->
                <a href="home.php?page=units">
                    <li class="app-sidebar__heading"><i style="color: black; width:10%" class="pe-7s-news-paper"></i>Units</li>
                </a>
                <a href="home.php?page=reporting">
                    <li class="app-sidebar__heading "><i style="color: black; width:10%;" class="pe-7s-date"></i> Reporting</li>
                </a>

                <li class="app-sidebar__heading">FEEDBACKS</li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#feedbacksModal">
                        Add Feedbacks
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<script>
    document.getElementById("CopyRights").innerHTML =
        'Website By <a  href="https://www.wesley.io.ke/" target="_blank" rel="noopener noreferrer">Wesley 🌍</a>';
</script>