<?php
class MvcController{
    public function plantilla(){
        include "views/template.php";
    }
    public function enlacesPagControl(){
        if(isset($_GET['action'])){
            $enlacesController=$_GET['action'];
        }else {
            $enlacesController = "inicio.php";
        }
        $respuesta = enlacesPag::enlacesPagModel($enlacesController);
        include $respuesta;
    }
}
?>