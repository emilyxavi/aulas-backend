<<<<<<< HEAD
<?php

//verifica se foi enviado os dados de usuário e senha
//do formulario de login
if(isset($_POST['usuario']) and isset($_POST['senha'])){
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

require_once "../conexao.php";

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `usuario` WHERE  `login`= ? ; ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("s", $usuario);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();

//pegar a primeira linha de resultado
$usuario = $resultado->fetch_assoc();

if($usuario){
    if(password_verify($senha, $usuario['senha'])){
    //inicia a sessão
    session_start();
    //cria a varíavel de sessão
    $_SESSION['usuario'] = $usuario;

    //redireciona para produtos
    header("Location: ../produto/index.php");

}else{
     
    $erro_login = "Senha incorreta";
}
}else{
    $erro_login = "Não existe usuario com esse login informado";
}
}

=======
<?php

//verifica se foi enviado os dados de usuário e senha
//do formulario de login
if(isset($_POST['usuario']) and isset($_POST['senha'])){
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

require_once "../conexao.php";

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `usuario` WHERE  `login`= ? ; ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("s", $usuario);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();

//pegar a primeira linha de resultado
$usuario = $resultado->fetch_assoc();

if($usuario){
    if(password_verify($senha, $usuario['senha'])){
    //inicia a sessão
    session_start();
    //cria a varíavel de sessão
    $_SESSION['usuario'] = $usuario;

    //redireciona para produtos
    header("Location: ../produto/index.php");

}else{
     
    $erro_login = "Senha incorreta";
}
}else{
    $erro_login = "Não existe usuario com esse login informado";
}
}

>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
