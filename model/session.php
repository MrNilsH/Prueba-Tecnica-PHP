<?php 

require_once('db/db.php');

class Session{

    public function iniciarSesion($username, $pass){

        $session = array();
        $con = ConexionBD::conectar();
        $sql = $con->prepare("SELECT * FROM usuarios WHERE username = :username AND accesscode = :pass");
        $sql->bindParam(":username", $username);
        $sql->bindParam(":pass", $pass);
        $sql->execute();

        while ($filas = $sql->fetch(PDO::FETCH_ASSOC)) {
            $session[] = $filas;
        }

        return $session;

    }



}


?>