<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
    	echo view('front/head_view',$data);
    	echo view('front/navbar');
        echo view('front/principal');
    	echo view('front/footer');
          
    }

    public function quienes_somos()
    {
        $data['titulo']='quienes somos';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('front/quienessomos');
        echo view('front/footer');
    }


 public function comercializacion()
    {
        $data['titulo']='comercializacion';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('front/comercializacion');
        echo view('front/footer');
    }

public function contacto()
    {
        $data['titulo']='contacto';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('front/contacto');
        echo view('front/footer');
    }

    public function registrarse()
    {
        $data['titulo']='registrarse';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('back/usuario/registrarse');
        echo view('front/footer');
    }

    public function login()
    {
        $data['titulo']='login';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('back/usuario/login');
        echo view('front/footer');
    }
    
    public function terminos_usos()
    {
        $data['titulo']='terminos y usos';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('front/terminosYusos');
        echo view('front/footer');
    }
 
    
}
