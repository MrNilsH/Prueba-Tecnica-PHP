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

	<?php include('view/layout/scripts.php'); ?>
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
							window.location.href='../view/home.php';
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