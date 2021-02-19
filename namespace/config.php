<?php

spl_autoload_register(function($classe){

    $diretorioClasses = "class";
    $filename = str_replace("\\", "/", $diretorioClasses . DIRECTORY_SEPARATOR . "$classe" . ".php");
    
    if(file_exists($filename) === true){

        require_once($filename);
    }
});

?>