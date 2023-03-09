<h2>Vetor com indice textual</h2>
<pre>
        +---------+
 Nome   |Notebook |
        +---------+
 Marca  |Dell     |
        +---------+
 Preco  | 5.400   |
        +---------+
</pre>

<?php
     $produto1 = [
        "nome" => "Notebook",
        "marca" => "Dell",
        "preco" => "5499,99"
     ];

     

    var_dump($produto);
    echo $produto["nome"] . "<br>";
    echo $produto["marca"] . "<br>";
    echo $produto["preco"] . "<br>";

    //estrutura de repetição especifica
    //para percorrer vetores
    foreach($produto as $key => $value) {
        echo $value . "</br>";
    }
?>
     