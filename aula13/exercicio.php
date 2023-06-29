<<<<<<< HEAD
<?php

if(isset($_GET['numero']) && isset($_GET['n2'])){
    $r = $_GET['numero'] + $_GET['n2'];
    echo $r;
}else{
    //echo "Você precisa informar os valores para somar";
    //faz um redirecionamento 
    header("Location: form1.html");
}



  

=======
<?php

if(isset($_GET['numero']) && isset($_GET['n2'])){
    $r = $_GET['numero'] + $_GET['n2'];
    echo $r;
}else{
    //echo "Você precisa informar os valores para somar";
    //faz um redirecionamento 
    header("Location: form1.html");
}



  

>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
?>