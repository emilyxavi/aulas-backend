<?php
 // http://localhost/3infoa/Jose_carvalho/aulas_backend/aula12/ExemplosGet.php?numero1=10%20&numero2=20
 // isso faz adiconar 2 variaveis e o php de baixo faz a somatoria
 // "?" faz separa o http do resto do cosigo adiconado acima
 //$_GET recebe os dados diretamente de uma URL após um ponto de interrogação

    $resultado = $_GET["numero1"] + $_GET["numero2"];
    echo "O resultado da soma é $resultado";
?>