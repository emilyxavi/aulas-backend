<<<<<<< HEAD
<?php

require_once "../conexao.php";


//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `produto`  ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();

//criar um vetor vazio
$produtos = [];

//pegar todas as linhas de resultado
while($produto = $resultado->fetch_assoc()){
 //adiciona o produto (linha do resultado) no vetor
 $produtos[] = $produto;
}



=======
<?php

require_once "../conexao.php";


//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `produto`  ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();

//criar um vetor vazio
$produtos = [];

//pegar todas as linhas de resultado
while($produto = $resultado->fetch_assoc()){
 //adiciona o produto (linha do resultado) no vetor
 $produtos[] = $produto;
}



>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
