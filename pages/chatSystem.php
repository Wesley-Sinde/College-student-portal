<?php
$id = $_SESSION['examineeSession']['exmne_id'];
$selExmne = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$id' ")->fetch(PDO::FETCH_ASSOC);

$Id = $_SESSION['examineeSession']['exmne_id'];
$stdName = $selExmne['exmne_fullname'];
?>

<?php
if (isset($_POST['submitMessage']) != "") {
    extract($_POST);
    //messageId`, `stdName`, `meassage` `CreatedBy`,
    $insData = $conn->query("INSERT INTO chatSystem(messageId,stdName,meassage,CreatedBy)
     VALUES('$Id','$stdName','$message','$id')");
    if ($insData) {
?>
        <script>
            Swal.fire(
                "Success",
                "Message sent successfully",
                "success"
            );
        </script>
    <?php
    } else {
    ?>
        <script>
            Swal.fire(
                "Failed",
                "Message broadcast Failed",
                "error"
            );
        </script>
<?php
    }
}

?>
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="col-md-12">
            <div style="margin: 0%;padding:0%" class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>Your Messages</div>
                    </div>
                </div>
                <div style="border-top: 1px solid rgba(2, 145, 240, 0.3);" class="main-card mb-3 card">
                    <div align='right'>
                        <a style="color: white;" href="home.php?page=messages">
                            <button class="mb-2 mr-2 btn btn-primary">Messages Count: <span class="badge badge-pill badge-light">
                                    ⚠
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <?php
            @$exmne_fullname = $_GET['exmne_fullname'];
            if ($exmne_fullname != '') {
                $placeholder = $exmne_fullname;
            } else {
            } ?>
            <div class="card-hover-shadow-2x mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-printer icon-gradient bg-ripe-malin"> </i>Chat Box

                        <label style="color: transparent;">______</label>
                        <label style="border-left: 1px solid rgba(2, 145, 240, 0.3);color: transparent;">______</label>

                        <div class="search-wrapper">
                            <div class="input-holder">
                                <button class="search-icon"><span></span></button>
                                <form action="home.php" method="get">
                                    <!-- <input name="exmne_fullname" value='<?php echo $exmne_fullname ?>' autocomplete="off" type="text" class="search-input"> -->


                                    <input name="exmne_fullname" placeholder="Type UserName To Search Message" autocomplete="off" value="<?php echo $exmne_fullname ?>" type="text" class="search-input">
                                    
                                    <input name="page" type="hidden" value="chatSystem">
                                </form>
                            </div>
                            <button class="close"></button>
                        </div>

                    </div>
                    <?php
                    if ($exmne_fullname != '') {
                        ?>
                    <div class="float-right">
                        <div style="color: red;" class="chat-box-wrapper chat-box-wrapper-right">
                            Result For <?php echo $exmne_fullname ?>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                        <div class="btn-group dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                <i class="pe-7s-menu btn-icon-wrapper"></i>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                <h6 tabindex="-1" class="dropdown-header">Tools</h6>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-book"> </i><span>Delete</span>
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <div class="p-3 text-right">
                                    <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                    <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll-area-lg">
                    <div class="scrollbar-container ps ps--active-y">
                        <div class="p-2">
                            <div class="chat-wrapper p-1">
                                <?php
                                //exmne_fullname
                                @$exmne_fullname = $_GET['exmne_fullname'];
                                if ($exmne_fullname != '') {
                                    $selMessage = $conn->prepare("SELECT * FROM chatSystem WHERE stdName LIKE :keyword ORDER BY id ASC");
                                    $selMessage->execute(['keyword' => '%' . $exmne_fullname . '%']);


                                    // $selMessage = $conn->query("SELECT * FROM chatSystem WHERE created > now() - INTERVAL 2 DAY  ORDER BY id ASC ");
                                } else {
                                    $selMessage = $conn->query("SELECT * FROM chatSystem WHERE created > now() - INTERVAL 2 DAY  ORDER BY id ASC ");
                                }
                                // messageId='$Id'
                                if ($selMessage->rowCount() > 0) {
                                    while ($message = $selMessage->fetch(PDO::FETCH_ASSOC)) {
                                        if ($message['messageId'] === $Id) {
                                ?>
                                            <div class="chat-box-wrapper">
                                                <div>
                                                    <div class="avatar-icon-wrapper mr-1">
                                                        <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                                        </div>
                                                        <div class="avatar-icon avatar-icon-lg rounded">
                                                            <?php
                                                            $image = (!empty($selExmneeData['photo'])) ? 'images/' . $selExmneeData['photo'] : 'images/profile.jpg';
                                                            echo  '<img src="' . $image . '"  alt="User Image"> '
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span style="color: green;" class="badge badge-pill badge-light">
                                                        📧 Me
                                                    </span>

                                                    <div class="chat-box">
                                                        <?php
                                                        echo  $message['meassage']
                                                        ?>
                                                    </div>
                                                    <small class="opacity-6">
                                                        <i class="fa fa-calendar-alt mr-1"></i>
                                                        <?php
                                                        $datecreated = DateTime::createFromFormat("Y-m-d H:i:s", $message["created"]);
                                                        echo $datecreated->format('d/m/y, H:i:s');


                                                        $today = new DateTime("today"); // This object represents current date/time with time set to midnight

                                                        $match_date = $datecreated;
                                                        $match_date->setTime(0, 0, 0); // set time part to midnight, in order to prevent partial comparison

                                                        $diff = $today->diff($match_date);
                                                        $diffDays = (int)$diff->format("%R%a"); // Extract days count in interval

                                                        switch ($diffDays) {
                                                            case 0:
                                                                echo " | <strong>Today</strong>";
                                                                break;
                                                            case -1:
                                                                echo " | <strong>Yesterday</strong>";
                                                                break;
                                                            case +1:
                                                                echo " | <strong>Tomorrow</strong>";
                                                                break;
                                                            default:
                                                                echo " | <strong>Sometime</strong>";
                                                        }
                                                        ?>
                                                        <!-- --11:01 AM | Yesterday -->
                                                    </small>
                                                </div>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="float-right">
                                                <div class="chat-box-wrapper chat-box-wrapper-right">
                                                    <div>
                                                        <span style="color: red;" class="badge badge-pill badge-light">
                                                            📧
                                                            <strong>
                                                                <?php
                                                                echo  $message['stdName'];
                                                                ?>
                                                            </strong>
                                                        </span>
                                                        <div class="chat-box">
                                                            <?php
                                                            echo  $message['meassage']
                                                            ?>
                                                        </div>
                                                        <small class="opacity-6">
                                                            <i class="fa fa-calendar-alt mr-1"></i>
                                                            <!-- 11:01 AM | Yesterday -->
                                                            <?php
                                                            $datecreated = DateTime::createFromFormat("Y-m-d H:i:s", $message["created"]);
                                                            echo $datecreated->format('d/m/y, H:i:s');

                                                            $today = new DateTime("today"); // This object represents current date/time with time set to midnight

                                                            $match_date = $datecreated;
                                                            $match_date->setTime(0, 0, 0); // set time part to midnight, in order to prevent partial comparison

                                                            $diff = $today->diff($match_date);
                                                            $diffDays = (int)$diff->format("%R%a"); // Extract days count in interval

                                                            switch ($diffDays) {
                                                                case 0:
                                                                    echo " | <strong>Today</strong>";
                                                                    break;
                                                                case -1:
                                                                    echo " | <strong>Yesterday</strong>";
                                                                    break;
                                                                case +1:
                                                                    echo " | <strong>Tomorrow</strong>";
                                                                    break;
                                                                default:
                                                                    echo " | <strong>Sometime</strong>";
                                                            }

                                                            ?>
                                                        </small>
                                                    </div>
                                                    <div>
                                                        <div class="avatar-icon-wrapper ml-1">
                                                            <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                                            </div>
                                                            <div class="avatar-icon avatar-icon-lg rounded">
                                                                <img src="images\avator2.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                } else { ?>
                                    <div class="float-right">
                                        <div class="chat-box-wrapper chat-box-wrapper-right">
                                            <div>
                                                <div style="color: red;" class="chat-box">Sorry we didn't find any message in our database, Start a conversation wiyh any of your friend online.
                                                </div>
                                                <small class="opacity-6">
                                                    <i class="fa fa-calendar-alt mr-1"></i>
                                                    Now | Today
                                                </small>
                                            </div>
                                            <div>
                                                <div class="avatar-icon-wrapper ml-1">
                                                    <div class="badge badge-bottom btn-shine badge-warning badge-dot badge-dot-lg">
                                                    </div>
                                                    <div class="avatar-icon avatar-icon-lg rounded">
                                                        <img src="images\avator2.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 265px;"></div>
                        </div>
                    </div>
                </div>
                <form name="submitMessage" method="post">
                    <div class="card-footer">
                        <input placeholder="Write here and hit enter to send..." autocomplete="off" type="text" name="message" class="form-control-sm form-control">
                    </div>
                    <div class="float-right">
                        <input class="mb-2 mr-2 btn btn-primary" name="submitMessage" type="submit" value="Send Messages">

                    </div>
                </form>
            </div>
            <hr>
        </div>
    </div>