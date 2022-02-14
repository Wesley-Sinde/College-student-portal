<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div style="border-bottom: 1px solid rgba(2, 145, 240, 0.3);">MANAGE EXAMINEE</div>
                    <label style="color: transparent;">______</label>
                    <label style="border-left: 1px solid rgba(2, 145, 240, 0.3);color: transparent;">______</label>

                    <div class="search-wrapper">
                        <div class="input-holder">
                            <button class="search-icon"><span></span></button>
                            <form action="home.php" method="get">
                                <input name="exmne_fullname" type="text" class="search-input" placeholder="Type Reg No To Search">
                                <input name="page" type="hidden" value="FeePayment">
                            </form>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    Examinee List
                </div>



                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                        <thead>
                            <tr>
                                <th>Reg No </th>
                                <th>Fullname</th>
                                <th>Course</th>
                                <th>Year level</th>
                                <th>status</th>
                                <th>Address</th>
                                <th>School</th>
                                <th>Class</th>
                                <th>Fee Balance</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selExmne = $conn->query("SELECT * FROM examinee_tbl ORDER BY exmne_id DESC ");
                            if ($selExmne->rowCount() > 0) {
                                while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) {

                                    $bal = 0;
                                    $stdid = $selExmneRow['exmne_id'];
                                    $selExmnefee = $conn->query("SELECT * FROM examnee_fee_invoices where id='$stdid' ORDER BY id ASC ");
                                    if ($selExmne->rowCount() > 0) {
                                        while ($selExmneRowfee = $selExmnefee->fetch(PDO::FETCH_ASSOC)) {
                                            $bal += $selExmneRowfee['ammount'];
                                        }
                                        if ($bal < 0) {
                            ?>
                                            <tr>
                                                <td><?php echo $selExmneRow['Reg_No']; ?></td>
                                                <td><?php echo $selExmneRow['exmne_fullname']; ?></td>
                                                <td>
                                                    <?php
                                                    $exmneCourse = $selExmneRow['exmne_course'];
                                                    $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$exmneCourse' ")->fetch(PDO::FETCH_ASSOC);
                                                    echo $selCourse['cou_name'];
                                                    ?>
                                                </td>

                                                <td><?php echo $selExmneRow['exmne_year_level']; ?></td>
                                                <td><?php echo $selExmneRow['exmne_status']; ?></td>
                                                <td><?php echo $selExmneRow['address']; ?></td>
                                                <td><?php echo $selExmneRow['School']; ?></td>
                                                <td><?php echo $selExmneRow['Class']; ?></td>
                                                <td><?php echo $bal; ?></td>
                                                <td>
                                                    <a href="home.php?id=<?php echo $selExmneRow['exmne_id']; ?>&page=FeePaymentnow" class="btn btn-sm btn-primary">Statement</a>

                                                </td>
                                            </tr>
                                <?php }
                                    }
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="3">
                                        <h3 class="p-3">No Student Found With Fee Balance</h3>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>