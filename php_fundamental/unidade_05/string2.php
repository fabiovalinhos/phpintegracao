<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            // strlen - Retorna primeira ocorrencia
            echo strlen("brazil") . "<br>";
            
            // stripos  - Retorna primeira ocorrência 
            echo stripos($_nome, "u") . "<br>";

            // strripos - Retorna última ocorrência
            echo strripos($_nome, "u") . "<br>";
            
            // strtolower - converte para letras min.
            

            // strtoupper - converte para letras min.
            

            // SUBSTR_COUNT - Conta quantas ocorreram
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            echo SUBSTR_COUNT($_nome, "u") . "<br>";
            
        ?>
        
        
    </body>
</html>