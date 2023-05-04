

<?php
//dependendo da url enviada pelo cliente faça a tabuada do numero mencionado 100%
$b = 0;
 $var = $_GET ["tabuada"];
 for ($i=1; $i <11 ; $i++) { 
     $b = $i  *  $var ;
    echo nl2br("$i x $var = " . $b.PHP_EOL) ;
 }

?>
