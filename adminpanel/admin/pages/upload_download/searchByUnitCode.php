<html>

<head>
    <title>Upload and Download Files</title>
    <link href="adminpanel/admin/pages/upload_download/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="adminpanel/admin/pages/upload_download/css/DT_bootstrap.css">
</head>
<script src="adminpanel/admin/pages/upload_download/js/jquery.js" type="text/javascript"></script>
<script src="adminpanel/admin/pages/upload_download/js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="adminpanel/admin/pages/upload_download/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="adminpanel/admin/pages/upload_download/js/DT_bootstrap.js"></script>

<style>
</style>

<body>
    <div class="app-main__outer">
        <div class="row-fluid">
            <div class="span12">
                <div class="container">
                    <br />
                    <h1>
                        <p>Upload And Download Exam</p>
                    </h1>
                    <form method="POST" class="navbar-form navbar-left" action="searchByUnitCode.php">
                        <div class="input-group">
                            <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search for Product" required>
                            <span class="input-group-btn" id="searchBtn" style="display:none;">
                                <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i> </button>
                            </span>
                        </div>
                    </form>

                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                                <th width="30%" align="center">Files</th>
                                <th width="20%" align="center">Action</th>
                            </tr>
                        </thead>
                        <?php

                        $exmne_id = $_SESSION['admin']['admin_id'];
                        $query = $conn->query("select * from exam_download where admin_id= $exmne_id  order by id desc");
                        while ($row = $query->fetch()) {
                            $name = $row['name'];
                            $Unit_Code = $row['Unit_Code'];
                            $exam_id = $row['Unit_Code'];
                        ?>
                            <tr>
                                <td>
                                    &nbsp;<?php echo $name; ?>
                                </td>
                                <td>
                                    <button class="alert-success"><a href="adminpanel/admin/pages/upload_download/download.php?filename=<?php echo $name; ?>&f=<?php echo $row['fname'] ?>">Download Exam</a></button>
                                </td>
                            </tr>

                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>