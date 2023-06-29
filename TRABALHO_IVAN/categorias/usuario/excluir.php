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
