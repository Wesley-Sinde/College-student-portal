<?php

$Id = $_SESSION['examineeSession']['exmne_id'];
?>
<?php
$id = $_SESSION['examineeSession']['exmne_id'];
@$messageId = $_GET['messageId'];

$updExam = $conn->query("UPDATE messages SET isRead='1' WHERE  id='$messageId' ");
?>
</style>
<link rel="stylesheet" type="text/css" href="css/mycss.css">
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
                            <button class="mb-2 mr-2 btn btn-primary">
                                Messages Count: <span class="badge badge-pill badge-light">
                                    <?php
                                    //echo $Messagecount;
                                    $Messagecount = $conn->query("SELECT * FROM messages WHERE (messageId='$Id' or messageID='0') and isRead='0' ORDER BY id DESC");
                                    echo $Messagecount->rowCount();
                                    ?>
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <?php
            $selMessage = $conn->query("SELECT * FROM messages WHERE id='$messageId'");
            if ($selMessage->rowCount() > 0) {
                while ($message = $selMessage->fetch(PDO::FETCH_ASSOC)) {
                    //`id`, `messageId`, `title`, `meassage`, `description`, `isRead`
            ?>
                    <div style="margin: 0%;padding:0%" class="main-card mb-3 card">
                        <div class="card-header"><?php echo $message['title']; ?></div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $message['description']; ?>
                            </h5>
                            <?php
                            echo $message['meassage'];
                            ?>
                        </div>
                        <div class="card-footer">Last Updated: <small>
                                <?php

                                // Declare and define two dates
                                $date1 = strtotime($message['created']);
                                $date2 = strtotime("now");

                                // Formulate the Difference between two dates
                                $diff = abs($date2 - $date1);


                                // To get the year divide the resultant date into
                                // total seconds in a year (365*60*60*24)
                                $years = floor($diff / (365 * 60 * 60 * 24));


                                // To get the month, subtract it with years and
                                // divide the resultant date into
                                // total seconds in a month (30*60*60*24)
                                $months = floor(($diff - $years * 365 * 60 * 60 * 24)
                                    / (30 * 60 * 60 * 24));


                                // To get the day, subtract it with years and
                                // months and divide the resultant date into
                                // total seconds in a days (60*60*24)
                                $days = floor(($diff - $years * 365 * 60 * 60 * 24 -
                                    $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));


                                // To get the hour, subtract it with years,
                                // months & seconds and divide the resultant
                                // date into total seconds in a hours (60*60)
                                $hours = floor(($diff - $years * 365 * 60 * 60 * 24
                                    - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24)
                                    / (60 * 60));


                                // To get the minutes, subtract it with years,
                                // months, seconds and hours and divide the
                                // resultant date into total seconds i.e. 60
                                $minutes = floor(($diff - $years * 365 * 60 * 60 * 24
                                    - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24
                                    - $hours * 60 * 60) / 60);


                                // To get the minutes, subtract it with years,
                                // months, seconds, hours and minutes
                                $seconds = floor(($diff - $years * 365 * 60 * 60 * 24
                                    - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24
                                    - $hours * 60 * 60 - $minutes * 60));

                                // Print the result
                                printf(
                                    "%d months, %d days, %d hours, "
                                        . "%d minutes, %d seconds",
                                    $months,
                                    $days,
                                    $hours,
                                    $minutes,
                                    $seconds
                                );
                                echo " ";
                                ?>


                            </small>
                            <?php echo "  -" . "Ago"
                            ?>
                        </div>
                    </div>

            <?php
                }
            }
            ?>
            <hr>
        </div>
    </div>