<?php

namespace App\Controllers;
//se trae(importa) el modelo de datos
use App\Models\ProductoModelo;

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

        #validar que llego
        if($this->validate('producto')){
            #3.se organizan losdatos en un array
            #los naranjados(claves) deben coincidir con las columnas de la base de datos


            $datos=array(
                "producto"=>$producto,
                "fotografia"=>$fotografia,
                "precio"=>$precio,
                "descripcion"=>$descripcion,
                "tipo"=>$tipo
            );

            #Intentamos grabar los datos en la base de datos
            try{
                $modelo =new ProductoModelo();
                $modelo->insert($datos);
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',"Exito al agregar el producto");

            }catch(\Exception $error){
                return redirect()->to(site_url('/productos/registro'))->with('mensaje', $error->getMessage());
            }

        }else{
            $mensaje = " Por favor diligencie todos los campos "; 
            return redirect()->to(site_url('/productos/registro'))->with('mensaje', $mensaje);

        }
        
        
        
       
        
    }
}
