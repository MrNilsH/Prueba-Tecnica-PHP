<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cafeteria | Login</title>
	
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
			<h4 class="text-center text-condensedLight">Iniciar Sesión</h4>

			<form name="loginSession" action="">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" name="login_username" id="userName" required>
				    <label class="mdl-textfield__label" for="userName">Usuario</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="password" name="login_password" id="password" required>
				    <label class="mdl-textfield__label" for="password">Contraseña</label>
				</div>

				<button type="submit" class="mdl-button" id="buttonlogin">
					Ingresar
				</button>

			</form>
		</div>
	</div>

	<script>

		$(document).ready(function() {
			$("#buttonlogin").click(function(){

				var user = $("input#userName").val();
				var pass = $("input#password").val();
				
				const parametros = {
                    "login_username" : user,
					"login_password" : pass
                };

				console.log(parametros);

				$.ajax({
					type: "POST",
					url: "controller/session.php",
					data: parametros,
					success: function(response) {
						if(response == 1){
							window.location.href='view/home.php';
						}else{
							alert("Falta ingresar algún dato o el usuario no existe");
						}
					}
				});
				
				return false;

			}); 
		});

	</script>
    
</body>
</html>