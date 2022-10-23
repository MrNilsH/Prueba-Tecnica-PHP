<?php

require_once('db/db.php');

class Productos
{

    public function registrar($nombre_producto, $referencia, $precio, $peso, $categoria, $stock, $fecha_creacion){
        try{
            $con = ConexionBD::conectar();
            $sql = $con->prepare("INSERT INTO productos (nombre_producto, referencia, precio, peso, categoria, stock, fecha_creacion, estado) VALUES (:nombre_producto, :referencia, :precio, :peso, :categoria, :stock, :fecha_creacion, 'A'); ");
            $sql->bindParam(":nombre_producto", $nombre_producto);
            $sql->bindParam(":referencia", $referencia);
            $sql->bindParam(":precio", $precio);
            $sql->bindParam(":peso", $peso);
            $sql->bindParam(":categoria", $categoria);
            $sql->bindParam(":stock", $stock);
            $sql->bindParam(":fecha_creacion", $fecha_creacion);
            $sql->execute();

            if($sql){
                return 1;
            }else{
                return 0;
            }
            
        }catch(Exception $e){
            echo $e->getMessage();
        }
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