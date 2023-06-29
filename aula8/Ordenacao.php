<<<<<<< HEAD
<h2>Ordenação</h2>

<?php

$nomes = [
    "Murilo",
    "Poliana",
    "Dalva",
    "Lavinia",
    "Camila",
    "Kauã",

    ]; 
    //algoritmo Select Sort -
    //          Quick sort, Merge
        for($c=0; $c<=5; $c++){
        for($i= $c + 1; $i<=5; $i++){
            if($nomes[$c]< $nomes[$i]){
            $celBranco = $nomes[$i];
            $nomes[$i] = $nomes[$c];
            $nomes[$c] = $celBranco;

            }
       }
    }
   

    
    var_dump($nomes);

    //Camila,Dalva,Kaua,Lavinia,Murilo,Poliana

=======
<h2>Ordenação</h2>

<?php

$nomes = [
    "Murilo",
    "Poliana",
    "Dalva",
    "Lavinia",
    "Camila",
    "Kauã",

    ]; 
    //algoritmo Select Sort -
    //          Quick sort, Merge
        for($c=0; $c<=5; $c++){
        for($i= $c + 1; $i<=5; $i++){
            if($nomes[$c]< $nomes[$i]){
            $celBranco = $nomes[$i];
            $nomes[$i] = $nomes[$c];
            $nomes[$c] = $celBranco;

            }
       }
    }
   

    
    var_dump($nomes);

    //Camila,Dalva,Kaua,Lavinia,Murilo,Poliana

>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
?>