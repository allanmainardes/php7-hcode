<?php

$conn = new PDO("mysql:host=localhost;dbname=teste", "root", "12345");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "mainardes";
$password = "12312321";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->execute();
?>