<?php

    include "conexao.php";
    $sql = "INSERT INTO times (nome, data_criacao, quant_titulos) VALUES
    (:nome, :data_criacao, :quant_titulos)";

    $nome = $_POST['nome'];
    $data_criacao = $_POST['data_criacao'];
    $quant_titulos = $_POST['quant_titulos'];

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':data_criacao', $data_criacao);
    $stmt->bindParam(':quant_titulos', $quant_titulos);
    $stmt->execute();


    header('Location:index.php');
    exit;
?>