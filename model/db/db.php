<?php 

require_once('../config.php');

class ConexionBD{

    public static function conectar()
 	{

 		try {
 			$con = new PDO("mysql:host=localhost; dbname=cafeteria", "root", "");
 		} catch (Exception $e) {
 			echo "Error al conectar con la base de datos";
 			echo $e->getMessage();
            exit();
 		}

        return $con;

	}

}



?> 