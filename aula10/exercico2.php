<<<<<<< HEAD
<h2>Exercício 1</h2>
<p>
    Criar o vetor abaixo, após imprimir seus
    valores utilizando a estrutura de repetição
    for.

    <pre>
                +------------+
       "nome"   |Maria       |
                +------------+
       "idade"  |17          |
                +------------+
       "altura" |1.65        |
                +------------+
    </pre>
</p>

<?php
   //criar o vetor
   $nomes = [];
   $nomes["nome"]   = "Maria";
   $nomes["idade"]  = 17;
   $nomes["altura"] = 1.65;

   //imprimir usando for
   foreach($nomes as $key => $values){
      echo $values . "<br>";
   }
=======
<h2>Exercício 1</h2>
<p>
    Criar o vetor abaixo, após imprimir seus
    valores utilizando a estrutura de repetição
    for.

    <pre>
                +------------+
       "nome"   |Maria       |
                +------------+
       "idade"  |17          |
                +------------+
       "altura" |1.65        |
                +------------+
    </pre>
</p>

<?php
   //criar o vetor
   $nomes = [];
   $nomes["nome"]   = "Maria";
   $nomes["idade"]  = 17;
   $nomes["altura"] = 1.65;

   //imprimir usando for
   foreach($nomes as $key => $values){
      echo $values . "<br>";
   }
>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
?>