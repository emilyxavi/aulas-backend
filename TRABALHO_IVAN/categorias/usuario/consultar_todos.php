<?php

require_once "../conexao.php";



$sql = "SELECT * FROM `categoria`";


$comando = $conexao->prepare($sql);


$comando->execute();

$resultado = $comando->get_result();

$categorias = [];


while($categoria = $resultado->fetch_assoc()){

 $categorias[] = $categoria;
}



