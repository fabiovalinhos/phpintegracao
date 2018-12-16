<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retonarDiaria ($salario, $dia, $cotacao) {
                $real = number_format($salario/$dia, 2);
                $dolar = number_format(($salario/$dia)/$cotacao, 2);
                return array($real, $dolar);
            }
            list($resultado_real, $resultado_dolar) = retonarDiaria(16500, 30, 4.10);
            echo "Diária em reais: " . $resultado_real . "<br>";
            echo "Diária em dolares: " . $resultado_dolar . "<br>";
        ?>
    </body>
</html>