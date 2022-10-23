<?php

require '../model/productos.php';


class ProductosController{

    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }

    $productos = new Productos();
 
    public function listarCategorias()
    {
 
        $listarCategorias = $items->listarCategoriasProductos();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listarCategorias'] = $listarCategorias;
 
        //Finalmente presentamos nuestra plantilla
        $this->view->show("../view/productos.php", $data);
    }
 
    public function agregar()
    {
        echo 'Aquí incluiremos nuestro formulario para insertar items';
    }
}

?>