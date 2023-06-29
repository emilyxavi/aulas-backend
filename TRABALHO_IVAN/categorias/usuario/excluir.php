<<<<<<< HEAD
<?php
require_once "../conexao.php";

if(isset($_GET["id"]))
{

$sql = "DELETE FROM `categoria` WHERE `id`= ?";


$comando = $conexao->prepare($sql);


$comando->bind_param("i", ($_GET["id"]));


$comando->execute();

}
header("Location: index.php");
=======
<?php
require_once "../conexao.php";

if(isset($_GET["id"]))
{

$sql = "DELETE FROM `categoria` WHERE `id`= ?";


$comando = $conexao->prepare($sql);


$comando->bind_param("i", ($_GET["id"]));


$comando->execute();

}
header("Location: index.php");
>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
