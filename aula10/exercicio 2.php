<h2> Exercício 2</h2>
<p>
    Criar o vetor abaixo, após imprimir seus
    valores utilizando a estrutura de repertição
    foreach.
</p>

<pre>

            +----------+
    nome    |   Maria  |
            +----------+
    idade   |    17    |
            +----------+
    altura  | 5.400    |
            +----------+
</pre>





<?php
$vetor = ["nome"=> "Maria", "idade" => 17, "altura" => 1.65];
foreach ($vetor as $key => $value) {
    echo $key."=>".$value . "<br>";
}

?>