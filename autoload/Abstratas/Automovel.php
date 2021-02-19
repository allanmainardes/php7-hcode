<?php

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


?>