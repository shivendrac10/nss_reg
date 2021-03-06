<!DOCTYPE html>
<html>
<head>
	<title>National Sevice Scheme</title>
	<?php include 'include/link.html'?>
	<style>
		html,
		body {
			height: 100%;
		}

		body {
			display: -ms-flexbox;
			display: -webkit-box;
			display: flex;
			-ms-flex-align: center;
			-ms-flex-pack: center;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
		}

		.form-signin {
			width: 100%;
			max-width: 330px;
			padding: 15px;
			margin: 0 auto;
		}
		.form-signin .checkbox {
			font-weight: 400;
		}
		.form-signin .form-control {
			position: relative;
			box-sizing: border-box;
			height: auto;
			padding: 10px;
			font-size: 16px;
		}
		.form-signin .form-control:focus {
			z-index: 2;
		}
		.form-signin input[type="email"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
	</style>
	 <script>
  
    </script>
</head>
<body>
	
	<body class="text-center container">
		<form class="form-signin" id="loginForm">
			<img class="mb-4" src="res/images/nsslogo.png" alt="" width="72" height="72">
			<h1 class="h3 mb-3 font-weight-normal">NSS IET-DAVV</h1>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>


			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm Password" onkeyup="validate()" required>
			<span id="msg"></span>
			

			<button name="signin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</body>
	</html>