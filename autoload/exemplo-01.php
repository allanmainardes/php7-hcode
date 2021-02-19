<?php

function __autoload($classe){
    var_dump($classe);
    require_once("$classe.php");
}

$carro = new DelRey();
$carro->acelerar(80);
?>