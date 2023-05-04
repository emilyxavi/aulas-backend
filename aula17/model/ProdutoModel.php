<?php

 require_once "../conexao.php";

//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `produto` (`nome`, `descrisao`, `preco`, `foto`) VALUES ('Smartphone', 'smartphone', 1500.00, 'semfoto.png')";
 

$comando = $conexao->prepare($sql);

$comando->execute();
?>