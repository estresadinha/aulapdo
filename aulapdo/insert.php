<?php
$conexao = new PDO ("mysql:host=localhost;dbname=aulapdo", "root", "");

function InserirInformacoes($conexao, $nome ,$valor, $validade){

    // $guarda = "INSERT INTO tb_produtos (nome_produto, valor, data_validade) VALUES ('" . $nome . "'," . $valor . ",'" . $validade . "')";

    $guarda = " INSERT into tb_produtos (nome_produto, valor, data_validade) VALUES (:nome_produto, :valor, :data_validade)";

   
    // $conexao->exec($guarda);

    $prepaeacao = $conexao->prepare($guarda);

    $prepaeacao->bindParam(":nome_produto",$nome);
    $prepaeacao->bindParam(":valor",$valor);
    $prepaeacao->bindParam(":data_validade",$validade);



$prepaeacao->execute();

}

InserirInformacoes($conexao, "doritos", 22.00, "2024-02-01");





?>