<?php

$conn = new PDO("mysql:host=localhost;dbname=teste", "root", "12345");
$conn->beginTransaction();
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 1;

$stmt->execute(array($id));

$conn->rollback();
//$conn->commit();
?>