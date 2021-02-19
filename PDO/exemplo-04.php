<?php

$conn = new PDO("mysql:host=localhost;dbname=teste", "root", "12345");

$stmt = $conn->prepare("UPDATE  tb_usuarios  SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "mainardes";
$password = "12312321";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);
$stmt->execute();
?>