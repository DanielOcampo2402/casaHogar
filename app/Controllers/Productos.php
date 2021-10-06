<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        return view('registroProductos');
    }

    public function registrar(){
        #Recibo todos los datos enviados desde el formulario(vista)
        
        $producto=$this->request->getPost("producto") ;
        $fotografia=$this->request->getPost("fotografia");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        #-Crear un arreglo asociativo con los datos de arriba
        $datos=array(
            "producto"=>$producto,
            "fotografia"=>$fotografia,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
        );
        print_r($datos);

    }
}
