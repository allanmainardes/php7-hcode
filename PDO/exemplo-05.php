<?php

$conn = new PDO("mysql:host=localhost;dbname=teste", "root", "12345");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 3;

$stmt->bindParam(":ID", $id);
$stmt->execute();
?>