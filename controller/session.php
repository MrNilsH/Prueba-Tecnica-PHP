<?php 

session_start();
date_default_timezone_set('America/Bogota');

require_once ('../model/session.php');

$session = new Session();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if($_POST["login_username"] != '' && $_POST["login_password"] != ''){

        $username = $_POST["login_username"];
        $pass = base64_encode($_POST["login_password"]);

        $login = $session->iniciarSesion($username, $pass);

        if($login){
            
            if($login[0]['estado'] = 1){
                $_SESSION['sesion'] = $login[0]['id'];
                $_SESSION['nombre'] = $login[0]['nombre'];

                echo 1; 

            }else{
                echo 0; 
                //echo "El usuario esta inactivo";
            }

        }else{
            echo 2; 
            //echo "Usuario no erroneo";
        }

    }else{
        echo 3; 
        //echo "Falta ingresar alguno de los datos requeridos";
    }

}


?>