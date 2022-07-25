<?php

namespace App\Controller\Paginas;

use \App\Utilitarios\View;


class Home{

    public static function getHome(){
        return View::render('paginas/home') ;
    }

}