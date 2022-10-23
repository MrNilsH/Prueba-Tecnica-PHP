<?php

require_once('db/db.php');

class Productos
{

    public function registrar(){
        
    }

    public function listar(){
        $productos = array();
        $con = ConexionBD::conectar();
        $sql = $con->prepare("SELECT p.id, p.nombre_producto, p.referencia, FORMAT(p.precio,0,'es_CO') as precio, p.peso, cp.nombre_categoria, p.stock, p.fecha_creacion FROM productos AS p INNER JOIN categorias_productos AS cp ON p.categoria = cp.id WHERE estado = 'A'; ");
        $sql->execute();

        while ($filas = $sql->fetch(PDO::FETCH_ASSOC)) {
            $productos[] = $filas;
        }

        return $productos;
    }

    public function listarCategoriasProductos(){
        $cat_productos = array();
        $con = ConexionBD::conectar();
        $sql = $con->prepare("SELECT * FROM categorias_productos");
        $sql->execute();

        while ($filas = $sql->fetch(PDO::FETCH_ASSOC)) {
            $cat_productos[] = $filas;
        }

        return $cat_productos;
    }

    public function Actualizar(){

    }

    public function eliminar(){

    }
    
}




?>