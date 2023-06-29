<<<<<<< HEAD
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



=======
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



>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
