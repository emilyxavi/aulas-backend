<?php

if(!empty($_FILES['foto']['tmp_name'])){
$onde_esta = $_FILES['foto']['tmp_name'];
$nome_do_arquivo = time() . $_FILES['foto'] ['name'];
$para_onde_vai = "../uploads/$nome_do_arquivo";
move_uploaded_file($onde_esta, $para_onde_vai);
}else{
    $nome_arquivo = "sem_imagem.jpg";
}
//PARA  DE EXECUTAR O RESTANTE DO CÓDIGO
