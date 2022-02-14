<?php
@$iddel = $_GET['iddel'];
if ($iddel != '') {
    $delp = $conn->query("DELETE  FROM mypeople WHERE id='$iddel'");
    if ($delp) {
?>
        <script>
            Swal.fire(
                "Success",
                "Deleted successfully",
                "success"
            );
        </script>
    <?php
    } else {
        $res = array("res" => "failed", "group_name" => $group_name);
    ?>
        <script>
            Swal.fire(
                "Failed",
                "We were not able to Deleting Your Data, Failed",
                "error"
            );
        </script>
<?php
    }
}
?>
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div style="border-bottom: 1px solid rgba(2, 145, 240, 0.3);">MANAGE Your People</div>
                    <label style="color: transparent;">______</label>
                    <label style="border-left: 1px solid rgba(2, 145, 240, 0.3);color: transparent;">______</label>

                    <div class="search-wrapper">
                        <div class="input-holder">
                            <button class="search-icon"><span></span></button>
                            <form action="home.php" method="get">
                                <input name="sentname" type="text" class="search-input" placeholder="Type Name To Search">
                                <input name="page" type="hidden" value="MyPeopleData">
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
                    Your List
                </div>



                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                        <thead>
                            <tr>
                                <th>Group </th>
                                <th>Fullname</th>
                                <th>Tell</th>
                                <th>Location</th>
                                <th>Description</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            @$sentid = $_GET['sentname'];
                            if ($sentid != '') {
                                $selectPdata = $conn->prepare("SELECT * FROM mypeople WHERE name LIKE :keyword");
                                $selectPdata->execute(['keyword' => '%' . $sentid . '%']);

                                // $selectPdata = $conn->query("SELECT * FROM mypeople where name='$sentid' ORDER BY id DESC ");
                            } else {
                                $selectPdata = $conn->query("SELECT * FROM mypeople  ORDER BY id DESC ");
                            }
                            if ($selectPdata->rowCount() > 0) {
                                while ($selectPdataraw = $selectPdata->fetch(PDO::FETCH_ASSOC)) {

                            ?>
                                    <tr>
                                        <td>
                                            <?php
                                            $exmnegroup = $selectPdataraw['groupId'];
                                            $selCourse = $conn->query("SELECT * FROM group_tbl WHERE id='$exmnegroup' ")->fetch(PDO::FETCH_ASSOC);
                                            echo $selCourse['group_name'];
                                            ?>
                                        </td>

                                        <td>
                                            <?php echo $selectPdataraw['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $selectPdataraw['tell']; ?>
                                        </td>
                                        <td>
                                            <?php echo $selectPdataraw['location']; ?>
                                        </td>
                                        <td>
                                            <?php echo $selectPdataraw['description']; ?>
                                        </td>
                                        <td>
                                            <a href="home.php?iddel=<?php echo $selectPdataraw['id']; ?>&page=MyPeopleData" class="btn btn-sm btn-primary">❌ Delete</a>
                                        </td>
                                        <td>
                                            <a href="home.php?id=<?php echo $selectPdataraw['id']; ?>&page=editMygroup" class="btn btn-sm btn-primary">✍ Edit</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else { ?>
                                <tr>
                                    <td colspan="3">
                                        <h3 class="p-3">No data found</h3>
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