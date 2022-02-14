<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Register TopMax College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="./main.d810cf0ae7f39f28f336.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <style>
        form i {
            /* margin-left: -30px; */
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-premium-dark ">
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class=" bg-premium-dark app-container">
            <div class="h-100 bg-premium-dark">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="modal-dialog w-100">
                            <div class="modal-content">
                                <form method="post">
                                    <div class="modal-body">
                                        <h5 class="modal-title">
                                            <h4 class="mt-2">
                                                <div>Welcome,</div>
                                                <span>It only takes a <span class="text-success">few seconds</span> to create your account</span>
                                            </h4>
                                        </h5>
                                        <div class="divider row"></div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="email" id="exampleEmail" placeholder="Email here..." type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="text" id="exampleName" placeholder="Name here..." type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="text" id="exampleName" placeholder="Registration No Here..." type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="date" id="exampleName" placeholder="date here..." type="date" class="form-control">
                                                    <small id="helpId" class="form-text text-muted">Enter DOB Eg: 2000</i></small>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="password" id="password" id="examplePassword" placeholder="Password here..." type="password" class="form-control">
                                                    <i style="color: blue;" class="bi bi-eye-slash fa-eye" id="togglePassword"> Show Password</i>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="passwordrep" id="password2" placeholder="Repeat Password here..." type="password" class="form-control">
                                                    <i style="color: blue;" class="bi bi-eye-slash fa-eye" id="togglePassword2"> Show Password</i>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 position-relative form-check">
                                            <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
                                            <label for="exampleCheck" class="form-check-label">Accept our <a href="javascript:void(0);">Terms and Conditions</a>.</label>
                                        </div>
                                        <div class="divider row"></div>
                                        <h6 class="mb-0">Already have an account?
                                            <a href="index.php" class="text-primary">Sign in</a> | <a href="forgotPassword.php" class="text-primary">Recover Password</a>
                                        </h6>
                                    </div>
                                    <div class="modal-footer d-block text-center">
                                        <button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">Create Account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © TopMax <?php echo date("Y"); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.d810cf0ae7f39f28f336.js"></script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye / eye slash icon
            this.classList.toggle('bi-eye');
        });
    </script>
    <script>
        const togglePassword2 = document.querySelector('#togglePassword2');
        const password2 = document.querySelector('#password2');
        togglePassword2.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
            password2.setAttribute('type', type);
            // toggle the eye / eye slash icon
            this.classList.toggle('bi-eye');
        });
    </script>
</body>

</html>