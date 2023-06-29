<?php  
if(isset($_GET['cor'])){
    $cor = $_GET['cor'];
   }else{
     $cor = 'white';
   }
?>

     $cores = ["yellow" , "green" , "blue" , "pink" , "red" , "purple" , "orange" , "gray" , "white"];
    
 ?>
 <doctype html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, init"
            <title> Document</title>
</head>    

    <body>

    <?php
        foreache($cor as $key => $cor){
            echo "<a href='atividade.php?cor=$cor'>Mudar para $cor</a>";
       }

?>
</body>   
