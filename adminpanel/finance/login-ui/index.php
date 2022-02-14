<!DOCTYPE html>
<html lang="en">

<head>
	<title>Finance LOGIN</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Poppins');

		/* BASIC */

		html {
			background-color: #56baed;
		}

		body {
			font-family: "Poppins", sans-serif;
			height: 100vh;
		}

		a {
			color: #92badd;
			display: inline-block;
			text-decoration: none;
			font-weight: 400;
		}

		h2 {
			text-align: center;
			font-size: 16px;
			font-weight: 600;
			text-transform: uppercase;
			display: inline-block;
			margin: 40px 8px 10px 8px;
			color: #cccccc;
		}



		/* STRUCTURE */

		.wrapper {
			display: flex;
			align-items: center;
			flex-direction: column;
			justify-content: center;
			width: 100%;
			min-height: 100%;
			padding: 20px;
		}

		#formContent {
			-webkit-border-radius: 10px 10px 10px 10px;
			border-radius: 10px 10px 10px 10px;
			background: #fff;
			padding: 30px;
			width: 90%;
			max-width: 450px;
			position: relative;
			padding: 0px;
			-webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
			box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
			text-align: center;
		}

		#formFooter {
			background-color: #f6f6f6;
			border-top: 1px solid #dce8f1;
			padding: 25px;
			text-align: center;
			-webkit-border-radius: 0 0 10px 10px;
			border-radius: 0 0 10px 10px;
		}



		/* TABS */

		h2.inactive {
			color: #cccccc;
		}

		h2.active {
			color: #0d0d0d;
			border-bottom: 2px solid #5fbae9;
		}



		/* FORM TYPOGRAPHY*/

		input[type=button],
		input[type=submit],
		input[type=reset] {
			background-color: #56baed;
			border: none;
			color: white;
			padding: 15px 80px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			text-transform: uppercase;
			font-size: 13px;
			-webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
			box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
			-webkit-border-radius: 5px 5px 5px 5px;
			border-radius: 5px 5px 5px 5px;
			margin: 5px 20px 40px 20px;
			-webkit-transition: all 0.3s ease-in-out;
			-moz-transition: all 0.3s ease-in-out;
			-ms-transition: all 0.3s ease-in-out;
			-o-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out;
		}

		input[type=button]:hover,
		input[type=submit]:hover,
		input[type=reset]:hover {
			background-color: #39ace7;
		}

		input[type=button]:active,
		input[type=submit]:active,
		input[type=reset]:active {
			-moz-transform: scale(0.95);
			-webkit-transform: scale(0.95);
			-o-transform: scale(0.95);
			-ms-transform: scale(0.95);
			transform: scale(0.95);
		}

		input[type=text],
		input[type=password] {
			background-color: #f6f6f6;
			border: none;
			color: #0d0d0d;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 5px;
			width: 85%;
			border: 2px solid #f6f6f6;
			-webkit-transition: all 0.5s ease-in-out;
			-moz-transition: all 0.5s ease-in-out;
			-ms-transition: all 0.5s ease-in-out;
			-o-transition: all 0.5s ease-in-out;
			transition: all 0.5s ease-in-out;
			-webkit-border-radius: 5px 5px 5px 5px;
			border-radius: 5px 5px 5px 5px;
		}

		input[type=text]:focus {
			background-color: #fff;
			border-bottom: 2px solid #5fbae9;
		}

		input[type=password]:focus {
			background-color: #fff;
			border-bottom: 2px solid #5fbae9;
		}

		input[type=text]:placeholder {
			color: #cccccc;
		}

		input[type=password]:placeholder {
			color: #cccccc;
		}



		/* ANIMATIONS */

		/* Simple CSS3 Fade-in-down Animation */
		.fadeInDown {
			-webkit-animation-name: fadeInDown;
			animation-name: fadeInDown;
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		@-webkit-keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0);
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none;
			}
		}

		@keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0);
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none;
			}
		}

		/* Simple CSS3 Fade-in Animation */
		@-webkit-keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@-moz-keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		.fadeIn {
			opacity: 0;
			-webkit-animation: fadeIn ease-in 1;
			-moz-animation: fadeIn ease-in 1;
			animation: fadeIn ease-in 1;

			-webkit-animation-fill-mode: forwards;
			-moz-animation-fill-mode: forwards;
			animation-fill-mode: forwards;

			-webkit-animation-duration: 1s;
			-moz-animation-duration: 1s;
			animation-duration: 1s;
		}

		.fadeIn.first {
			-webkit-animation-delay: 0.4s;
			-moz-animation-delay: 0.4s;
			animation-delay: 0.4s;
		}

		.fadeIn.second {
			-webkit-animation-delay: 0.6s;
			-moz-animation-delay: 0.6s;
			animation-delay: 0.6s;
		}

		.fadeIn.fourth:hover {
			cursor: pointer;
			background-color: rgb(255, 162, 0);
		}

		.fadeIn.third {
			-webkit-animation-delay: 0.8s;
			-moz-animation-delay: 0.8s;
			animation-delay: 0.8s;
		}

		.fadeIn.fourth {
			-webkit-animation-delay: 1s;
			-moz-animation-delay: 1s;
			animation-delay: 1s;
		}

		/* Simple CSS3 Fade-in Animation */
		.underlineHover:after {
			display: block;
			left: 0;
			bottom: -10px;
			width: 0;
			height: 2px;
			background-color: #56baed;
			content: "";
			transition: width 0.2s;
		}

		.underlineHover:hover {
			color: #0d0d0d;
		}

		.underlineHover:hover:after {
			width: 100%;
		}



		/* OTHERS */

		*:focus {
			outline: none;
		}

		#icon {
			width: 60%;
		}

		* {
			box-sizing: border-box;
		}
	</style>
</head>

<body>

	<div class="wrapper fadeInDown">
		<div id="formContent">
			<!-- Tabs Titles -->
			<h2 class="active"> Sign In </h2>
			<h2 class="inactive underlineHover">Sign Up </h2>

			<!-- Icon -->
			<div class="fadeIn first">
				<img src="data:image/png;base64,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" id="icon" alt="User Icon" />
			</div>

			<!-- Login Form -->
			<form method="post" action="query/loginExe.php" id="adminfinanceLoginFrm" class="login100-form validate-form">
				<input type="text" id="login" class="fadeIn second" name="username" placeholder="Enter Registration Number">
				<input type="password" id="password" class="fadeIn second" name="pass" placeholder="password"><br>
				<div id='loader' style='display: none;'>
					<img src='../../Images/refresh.gif' width='32px' height='32px'>
				</div>
				<input type="submit" class="fadeIn fourth" value="Log In">
			</form>
			<!-- Remind Passowrd -->
			<div id="formFooter">
				<a class="underlineHover" href="#">Forgot Password?</a>
			</div>

		</div>
	</div>
	<script>
		$(document).ajaxStart(function() {
			// Show image container
			$("#loader").show();
		});
		$(document).ajaxComplete(function() {
			// Hide image container
			$("#loader").hide();
		});
	</script>
	<script src="login-ui/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="login-ui/vendor/animsition/js/animsition.min.js"></script>
	<script src="login-ui/js/main.js"></script>

</body>

</html>