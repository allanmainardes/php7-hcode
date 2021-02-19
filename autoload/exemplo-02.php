<?php

function incluirClasses($classe){

    if(file_exists($classe.".php") === true){
        require_once($classe.".php");
    }
}

spl_autoload_register("incluirCLasses");
spl_autoload_register(function($nomeClasse){
    if(file_exists("Abstratas". DIRECTORY_SEPARATOR .$nomeClasse.".php") === true){
        require_once("Abstratas". DIRECTORY_SEPARATOR .$nomeClasse.".php");
    }
});

$carro = new DelRey();

$carro ->acelerar(89);

?>