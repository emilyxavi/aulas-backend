<h2> Exercício 1</h2>
<p>
    Criar o vetor abaixo, após imprimir seus
    valores utilizando a estrutura de repertição
    for.
</p>

<pre>

            +-----------+
    0       |   Pedro   |
            +-----------+
    1       |   Julia   |
            +-----------+
    2       |   Maria   |
            +-----------+
</pre>




<?php
$vetor = ["Pedro", "Julia", "Maria"];
for ($i=0; $i <=2 ; $i++) { 
    echo $vetor[$i] . "<br>";
}
?>