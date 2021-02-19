<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);
}


class Civic implements Veiculo{

    public function acelerar($velocidade){
        echo "o veículo acelerou até a velocidade: {$velocidade}";
    }

    protected function frear($velocidade){
        echo "o veiculo frenou até a velocidade: {$velocidade}";
    }

    public function trocarMarcha($marcha){
        echo "o veículo engatou a marcha: {$marcha}";
    }

}


$carro = new Civic();
$carro->acelerar(80);
$carro->frear(30);
$carro->trocarMarcha(2);
?>