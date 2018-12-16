<?php
    $salario = 800;
    $gasolina = 2.99;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O $salario é um número?" . is_numeric($salario) . "<br>";
            echo "O $gasolina é um número?" . is_numeric($gasolina) . "<br> <br>";

            // testar se é inteiro


        // testar se é float
            echo "O $salario é um número?" . is_int($salario) . "<br>";
            echo "O $gasolina é um número?" . is_int($gasolina) . "<br> <br>";

            echo round($gasolina) . "<br>";
            echo floor($gasolina) . "<br>";
            echo ceil($gasolina) . "<br>";

        ?>
        
        
    </body>
</html>