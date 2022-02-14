<?php session_start() ?>
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
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-6">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="h5 modal-title">Forgot your Password?
                                        <h6 class="mt-1 mb-0 opacity-8">
                                            <span>Use the form below to recover it.</span>
                                        </h6>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <form class="" action="mailer.php" method="post">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="hiderAfterSubmit position-relative form-group">
                                                        <label for="exampleEmail" class="">Email</label>
                                                        <input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control">
                                                        <input type="hidden" name="subject" value="Reset Passord">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 d-flex align-items-center">
                                                <h6 class="mb-0">
                                                    <a href="index.php" class="text-primary">Sign in existing account</a>
                                                </h6>
                                                <div class="ml-auto">
                                                    <button type="submit" name="send" class="hiderAfterSubmit changetxt btn btn-primary btn-lg">Recover Password</button>
                                                </div>
                                            </div>
                                        </form>

                                        <br />
                                        <?php
                                        if (isset($_SESSION['status'])) {
                                            // echo ($_SESSION['try'];
                                            //echo $_SESSION['try'];
                                            if ($_SESSION['status'] == "ok") {
                                        ?>
                                                <script>
                                                    var appBanners = document.getElementsByClassName('hiderAfterSubmit');
                                                    for (var i = 0; i < appBanners.length; i++) {
                                                        appBanners[i].style.display = 'none';
                                                    }; // Find the element
                                                    // document.getElementById("changetxt").innerHTML = "Hello, Go To Sign In Page For An Existing Account!";
                                                    x = document.getElementsByClassName("changetxt"); // Find the elements
                                                    for (var i = 0; i < x.length; i++) {
                                                        x[i].innerText = "Hello, Go To Sign In Page For An Existing Account!"; // Change the content
                                                    }
                                                </script>
                                                <div class="alert alert-info"><?php echo $_SESSION['result'] ?></div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="alert alert-danger"><?php echo $_SESSION['result'] ?></div>
                                        <?php
                                            }

                                            unset($_SESSION['result']);
                                            unset($_SESSION['status']);
                                        }
                                        ?>

                                    </div>
                                    <div class="divider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © TopMax <?php echo date("Y"); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js\scrriptchat.js"></script>
    <!-- <script>
        var appBanners = document.getElementsByClassName('hiderAfterSubmit');
        for (var i = 0; i < appBanners.length; i++) {
            appBanners[i].style.display = 'none';
        }
    </script> -->
</body>

</html>