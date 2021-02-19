<?php

abstract class Animal {
    public function emitirSom(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal{
    public function emitirSom(){
        return "Late";
    }
    
}

class Dragao extends Animal{
    public function emitirSom(){
        return "Ruge";
    }

    public function mover(){
        return "Voa e " . parent::mover();
    }
}

$rex = new Cachorro();

echo $rex->emitirSom();
echo "<br>";
echo $rex->mover();
echo "<br>";

$dracarys = new Dragao();

echo $dracarys->emitirSom();
echo "<br>";
echo $dracarys->mover();
echo "<br>";
?>