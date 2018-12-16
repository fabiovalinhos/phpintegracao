<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $agenda = array(
                    "nome" => "José",
                    "sobrenome" => "Silva",
                    "salario" => 1000,
                    "idade" => 60
            );

            foreach ($agenda as $chave => $valor) {
                echo $chave . ": " . $valor . "<br>";
            }

        ?>
    </body>
</html>