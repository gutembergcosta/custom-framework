<?php

namespace App\Utilitarios;

class View{

    private static function getDataView($viewNome){
        $arquivo = __DIR__.'/../../tema/'.$viewNome.'.htm';
        return file_exists($arquivo) ? file_get_contents($arquivo) : '';
    }

    public static function render($viewNome){
        $view = self:: getDataView($viewNome);
        return $view;
    }

}