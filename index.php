<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="public/css/normalize.css">
	<link rel="stylesheet" href="public/css/sweetalert2.css">
	<link rel="stylesheet" href="public/css/material.min.css">
	<link rel="stylesheet" href="public/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="public/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="public/css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="public/js/material.min.js" ></script>
	<script src="public/js/sweetalert2.min.js" ></script>
	<script src="public/js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="public/js/main.js" ></script>
</head>

<body>
	<div class="login-wrap cover">
		<div class="container-login">
			<p class="text-center" style="font-size: 80px;">
				<i class="zmdi zmdi-account-circle"></i>
			</p>
			<p class="text-center text-condensedLight">Sign in with your Account</p>
			<form action="home.html">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="userName">
				    <label class="mdl-textfield__label" for="userName">User Name</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="password" id="pass">
				    <label class="mdl-textfield__label" for="pass">Password</label>
				</div>
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; margin: 0 auto; display: block;">
					SIGN IN
				</button>
			</form>
		</div>
	</div>
</body>
</html>