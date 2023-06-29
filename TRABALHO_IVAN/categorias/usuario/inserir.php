<?php
require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["cor"]) && isset($_POST["ativos"]))
{
$id = $_POST["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$cor = $_POST["cor"];
$ativos = $_POST["ativos"];

$sql = "INSERT INTO `categoria`(`id`,`nome`, `descricao`, `cor`, `ativos`) VALUES (?, ?, ?, ?, ?);";


$comando = $conexao->prepare($sql);


$comando->bind_param("issss", $id, $nome, $descricao, $cor, $ativos);


$comando->execute();

}
header("Location: index.php");

