
<?php

require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["cor"]) && isset($_POST["ativos"]))
{


    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $cor = $_POST["cor"];
    $ativos = $_POST["ativos"];



$sql = "UPDATE categoria SET `nome` = ?, `descricao` = ?, `cor` = ?, `ativos` = ? WHERE `id`= ? ";

    
$comando = $conexao->prepare($sql);


$comando->bind_param("ssssi", $nome, $descricao, $cor, $ativos, $id);


$comando->execute();

}

header("Location: index.php");

