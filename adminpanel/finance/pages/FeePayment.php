<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div style="padding: 0%; margin:0%;" class="page-title-wrapper">
                <div style="padding: 0%; margin:0%;" class="page-title-heading">
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
                                <th>Admission Year</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //exmne_fullname
                            @$exmne_fullname = $_GET['exmne_fullname'];


                            if ($exmne_fullname != '') {
                                $selExmne = $conn->prepare("SELECT * FROM examinee_tbl WHERE exmne_fullname LIKE :keyword");
                                $selExmne->execute(['keyword' => '%' . $exmne_fullname . '%']);
                                //$selExmne = $conn->query("SELECT * FROM examinee_tbl where exmne_fullname='$exmne_fullname'  ORDER BY exmne_id DESC ");
                            }
                            // Else to load  home  page display
                            else {
                                $selExmne = $conn->query("SELECT * FROM examinee_tbl ORDER BY exmne_id DESC ");
                            }
                            if ($selExmne->rowCount() > 0) {
                                while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
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
                                        <td><?php echo $selExmneRow['Admission_Year']; ?></td>
                                        <td>
                                            <a href="home.php?id=<?php echo $selExmneRow['exmne_id']; ?>&page=FeePaymentnow" class="btn btn-sm btn-primary">Select</a>

                                        </td>
                                    </tr>
                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="2">
                                        <h3 class="p-3">No Student Found</h3>
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