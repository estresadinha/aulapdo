<?php
echo "<h2> AulaPDO </h2>";

$conexao = new PDO ("mysql:host=localhost;dbname=aulapdo", "root", "");

//var_dump($conexao);

$select = "SELECT * FROM tb_produtos"; 

$resultado = $conexao->query($select );

$consulta = $resultado->fetchAll();
echo "<pre>";


// var_dump($consulta);
echo '<ul>';

foreach ($consulta as $linha){


    echo '<li>' . $linha ['nome_produto']. '</li>';
}
echo '</ul>';

?>