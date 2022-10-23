<?php
require '../model/productos.php';
$productos = new Productos();

echo $nombre_producto = $_POST['nombre_producto_reg'];
echo $referencia = $_POST['referencia_reg'];
echo $precio = $_POST['precio_reg'];
echo $peso = $_POST['peso_reg'];
echo $categoria = $_POST['categoria_reg'];
echo $stock = $_POST['stock_reg'];
echo $fecha_creacion = date('Y-m-d');

$registrarProductos = $productos->registrar($nombre_producto, $referencia, $precio, $peso, $categoria, $stock, $fecha_creacion);
echo $registrarProductos;

?>