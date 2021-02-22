<?php

function trataNome($nome){

    if (!$nome){
        throw new Exception ("Nenhum nome foi informado.", 1);
    }
    echo ucfirst($nome)."<br>";
}


try{
    trataNome("teste");
    trataNome("");
} catch(Exception $e){
    echo $e->getMessage()."<br>";
} finally{
    echo "Entrou no try";
}
?>