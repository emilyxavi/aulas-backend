<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de mudança de cor</title>
    </head>
    <body>
        <?php
        $cores =["Yellow","Green","Blue","Pink","Red","Purple","Orange","Grey","White"];

        if (isset($_GET["cor"])) {
            $c= $_GET["cor"];
            echo "<style>body{background-color:$cor}</style>";
        } 
        foreach ($cores as $key => $cor) { 
            echo  "<a href='pagina.php?cor=$cor'> $cor
            Mudar para $cor
            
            </a><br>";
        }
        ?>
            
        </form>
    </body>
    </html>