<?php

namespace Cliente;

class Cadastro extends \Cadastro {
    
    public function registrarVenda(){

        echo "venda tal" . $this->getNome();
    }
}

?>