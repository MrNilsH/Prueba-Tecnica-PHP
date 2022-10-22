<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cafeteria | Login</title>
	<?php include('view/layout/styles.php'); ?>
</head>

<body>
	<div class="login-wrap cover">
		<div class="container-login">
			<p class="text-center" style="font-size: 80px;">
				<i class="zmdi zmdi-account-circle"></i>
			</p>
			<p class="text-center text-condensedLight">Iniciar Sesión</p>

			<form action="home.html">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="userName">
				    <label class="mdl-textfield__label" for="userName">Usuario</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="password" id="pass">
				    <label class="mdl-textfield__label" for="pass">Contraseña</label>
				</div>
				<button class="mdl-button" id="buttonlogin">
					Ingresar
				</button>
			</form>
		</div>
	</div>

	<?php include('view/layout/scripts.php'); ?>
    
</body>
</html>