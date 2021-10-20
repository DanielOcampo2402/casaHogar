<?php

namespace App\Controllers;
//se trae(importa) el modelo de datos
use App\Models\AnimalModelo;

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
            $datos=array(
                "nombre"=>$nombre,
                "foto"=>$foto,
                "edad"=>$edad,
                "descripcion"=>$descripcion,
                "tipo"=>$tipo
            );

            #3.se organizan losdatos en un array
            #los naranjados(claves) deben coincidir con las columnas de la base de datos
            try{
                $modelo =new AnimalModelo();
                $modelo->insert($datos);
                return redirect()->to(site_url('/Animales/registro'))->with('mensaje',"Exito al agregando el animal");

            }catch(\Exception $error){
                return redirect()->to(site_url('/Animales/registro'))->with('mensaje', $error->getMessage());
            }


        }else{
            $mensaje = " Por favor diligencie todos los campos "; 
            return redirect()->to(site_url('/Animales/registro'))->with('mensaje', $mensaje);

        }
        
        
       
        
        
    }
}