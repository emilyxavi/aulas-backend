<h2>Estrutura de condição</h2>
<hr>
<p>

 A estrutura de condição é utilizada 
 para avaliar qual instrução deve ser 
 executada, dada uma condição.

Se a condição for verdadeira (true) executa a 
instrução 1, caso contrário executa a instrução 2.


<strong>Exemplo</strong>
 <pre>
 if(<em>condicao</em>){
    //instrução 1
 }else{
    //instrução 2
 }

 </pre>
</p>

<?php
    /*
    Para passar de ano é necessário tirar no 
    mininmo 6 pontos em cada diciplina. Murilo 
    tirou .... Ele foi aprovado ou não?
    */
    $nota_do_murilo = 7;
    $faltas = 76;

    if($nota_do_murilo >= 6 && $faltas < 75){
        echo "Murilo foi reprovado!!!!!!!!!! >:)Boa cachorro";
    }else{
        echo"Murilo foi aprovado, >:( tururuuu"; 
    }
    ?>

    <strong>Exemplo2</strong>
<p>
    O aluno para ser aprovado precisa obter no0ta superior a 6 pontos, para fazer o exame final 
    precisa ter tirado menos de 6 e mais de 3 pontos.
    Notas menores que 3 são reprovação deretas.
</p>

<?php
 $nota = 6;
 if(&nota >=6){
    echo "Aprovado";
 }else if($nota> 3){
    echo" faz exame final";
 }else {
    echo"reprovado";
 }
 ?>