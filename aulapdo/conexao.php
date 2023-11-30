<?php
echo "<h2> AulaPDO </h2>";

$conexao = new PDO ("mysql:host=localhost;dbname=aulapdo", "root", "");

//var_dump($conexao);

$select = "SELECT * FROM tb_produtos WHERE nome_produto LIKE '%A%'"; 

$resultado = $conexao->query($select );
$consulta = $resultado->fetchAll();
echo "<pre>";

var_dump($consulta);

?>