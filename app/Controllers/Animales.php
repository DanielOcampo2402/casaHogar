<?php

namespace App\Controllers;

class Animales extends BaseController
{
    public function index()
    {
        return view('registroAnimales');
    }

    public function registrar(){
        #Recibo todos los datos enviados desde el formulario(vista)
        
        $nombre=$this->request->getPost("nombre") ;
        $foto=$this->request->getPost("foto");
        $edad=$this->request->getPost("edad");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        #validar que llego
        if($this->validate('animal')){
            echo(" <h1> Melo </h1> ");

        }else{
            $mensaje = " Por favor diligencie todos los campos "; 
            return redirect()->to(site_url('/Animales/registro'))->with('mensaje', $mensaje);

        }
        
        #-Crear un arreglo asociativo con los datos de arriba
        $datos=array(
            "nombre"=>$nombre,
            "foto"=>$foto,
            "edad"=>$edad,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
        );
        print_r($datos);
        
    }
}