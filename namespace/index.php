<?php

require_once("config.php");

use Cliente\Cadastro;

$cadastro = new Cadastro();

$cadastro->setNome("Allan Mainardes");
$cadastro->setEmail("allanmainardes@gmail.com");
$cadastro->setSenha("123456");
$cadastro->registrarVenda();
//echo ($cadastro);
?>