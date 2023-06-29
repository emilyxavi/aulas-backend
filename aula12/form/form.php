<<<<<<< HEAD
<?php
//dependendo da url enviada pelo cliente faça a tabuada do numero mencionado 100%
$b = 0;
 $var = $_GET ["tabuada"];
 for ($i=1; $i <10 ; $i++) { 
     $b = $i  *  $var ;
    echo nl2br("$i x $var = " . $b.PHP_EOL) ;
 }

=======
<?php
//dependendo da url enviada pelo cliente faça a tabuada do numero mencionado 100%
$b = 0;
 $var = $_GET ["tabuada"];
 for ($i=1; $i <10 ; $i++) { 
     $b = $i  *  $var ;
    echo nl2br("$i x $var = " . $b.PHP_EOL) ;
 }

>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
?>