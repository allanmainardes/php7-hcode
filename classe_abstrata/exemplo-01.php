<?php
//objeto nunca instancia classe abstrata

interface Veiculo{

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);
}


abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){
        echo "o veículo acelerou até a velocidade: {$velocidade}";
    }

    public   function frear($velocidade){
        echo "o veiculo frenou até a velocidade: {$velocidade}";
    }

    public function trocarMarcha($marcha){
        echo "o veículo engatou a marcha: {$marcha}";
    }

}

class DelRey extends Automovel {

    public function empurrar(){

    }
}

//$carro = new Automovel(); | vai dar erro pois não pode ser instanciada direto, outra classe deve extender
$carro = new Delrey();

$carro->acelerar(200);
?>