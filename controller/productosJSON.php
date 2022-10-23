<?php 

require_once ("../model/productos.php");

$productos = new Productos();
$listar = $productos->listar();
$data['data'] = $listar;

echo json_encode($data,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

?>