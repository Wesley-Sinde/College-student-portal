<?php include("conn.php");
if (isset($_POST['send'])) {
    extract($_POST);
    $password = password_hash($repeatPass, PASSWORD_DEFAULT);

    try {
        $updCourse = $conn->query("UPDATE examinee_tbl SET  exmne_password='$password' WHERE exmne_id='$id' ");
        if ($updCourse) {
            $_SESSION['status'] = 'ok';
            $_SESSION['result'] = 'Account password updated successfully, go to log in page now';
            //header("location: index.php");
        } else {
            $_SESSION['status'] = 'error';
            echo '  <p style="color: red; font-weight: bold;">Account details not updated successfully, an error occured while updating your details.</p>';
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
}
?>
<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Topmax Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="stylesheet" href="css\cssChat.css">
    <style>
        #error_msg {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-6">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100">
                            <?php

                            if (isset($_SESSION['status'])) {
                                if ($_SESSION['status'] == "ok") {
                            ?>

                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="h5 modal-title">Forgot your Password Reset panel!
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-info"><?php echo $_SESSION['result'] ?></div>
                                            <button class="btn btn-outline-primary " type="button">
                                                <h6 class="mb-0 alert alert-info">
                                                    <a href="index.php" class="text-primary">Sign in existing account</a>
                                                </h6>
                                            </button>
                                            <?php
                                            unset($_SESSION['result']);
                                            unset($_SESSION['status']);
                                            ?>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="alert alert-danger"><?php echo $_SESSION['result'] ?></div>
                                    <h6 class="mb-0">
                                        <a href="index.php" class="text-primary">Sign in existing account</a>
                                    </h6>
                                <?php
                                    unset($_SESSION['result']);
                                    unset($_SESSION['status']);
                                }
                            } else { ?>
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="h5 modal-title">Forgot your Password Reset panel!
                                            <h6 class="mt-1 mb-0 opacity-8">
                                                <span>Use the form below create new password.</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <?php

                                            session_start();
                                            @$u_key = $_GET['u_key'];
                                            $selExmneeData = $conn->query("SELECT * FROM passreset WHERE u_key='$u_key ' ");
                                            $selAccRow = $selExmneeData->fetch(PDO::FETCH_ASSOC);
                                            if ($selExmneeData->rowCount() > 0) {
                                                $exmnId = $selAccRow['u_id'];
                                                $deleteDAta = $conn->query("DELETE  FROM  passreset  WHERE u_id='$exmnId' ");
                                            ?>
                                                <form method="post">
                                                    <div class="form-row">
                                                        <div class="col-md-12">
                                                            <div class="position-relative form-group">
                                                                <label for="exampleEmail" class="">New Password</label>
                                                                <input type="hidden" value="<?php echo $exmnId ?>" name="id">
                                                                <input name="newPass" required id="newPass" placeholder="New Password here..." type="password" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="position-relative form-group">
                                                                <label for="exampleEmail" class="">Repeate Password</label>
                                                                <input onkeydown="checkPasswordMatch()" name="repeatPass" required id="repeatPass" placeholder="Repeate Password here..." type="password" class="form-control">
                                                                <p style="color: red; font-weight: bold;" id="password_status"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4 d-flex align-items-center">
                                                        <h6 class="mb-0">
                                                            <a href="index.php" class="text-primary">Sign in existing account</a>
                                                        </h6>
                                                        <div class="ml-auto">
                                                            <button type="submit" id="submit" name="send" class="btn btn-primary btn-lg">Recover Password</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            <?php
                                            } else { ?>
                                                <div class="alert alert-danger">You don't have permission to access this page. Kindly counsilt IT department for assistance</div>
                                            <?php }
                                            ?>
                                        </div>
                                        <div class="divider"></div>
                                    </div>
                                </div>
                            <?php
                            } ?>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © TopMax <?php echo date("Y"); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="js\scrriptchat.js"></script>
<script>
    function checkPasswordMatch() {
        var status = document.getElementById("password_status");
        var submit = document.getElementById("submit");

        status.innerHTML = "";
        submit.removeAttribute("disabled");

        if (document.getElementById("repeatPass").value === "")
            return;

        if (document.getElementById("newPass").value === document.getElementById("repeatPass").value)
            return;

        status.innerHTML = "Passwords don't match";
        submit.setAttribute("disabled", "disabled");
    }

    document.getElementById("newPass").addEventListener("change", function(event) {
        checkPasswordMatch();
    });
    document.getElementById("repeatPass").addEventListener("change", function(event) {
        checkPasswordMatch();
    });
</script>

</html>