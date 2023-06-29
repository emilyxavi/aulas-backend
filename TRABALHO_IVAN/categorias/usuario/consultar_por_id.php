<<<<<<< HEAD
<?php

require_once "../conexao.php";


if(isset($_GET['id']))
{


$id = $_GET['id'];


$sql = "SELECT * FROM `categoria` WHERE  `id`= ? ; ";


$comando = $conexao->prepare($sql);


$comando->bind_param("i", $id);


$comando->execute();


$resultado = $comando->get_result();


$categoria = $resultado->fetch_assoc();

}

=======
<?php

require_once "../conexao.php";


if(isset($_GET['id']))
{


$id = $_GET['id'];


$sql = "SELECT * FROM `categoria` WHERE  `id`= ? ; ";


$comando = $conexao->prepare($sql);


$comando->bind_param("i", $id);


$comando->execute();


$resultado = $comando->get_result();


$categoria = $resultado->fetch_assoc();

}

>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
