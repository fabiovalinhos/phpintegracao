<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        $contador = 1;
        while ($contador <=5) {
            $sorteio = rand(1,60);
            echo $sorteio . "<br>";
            $contador ++;
        }
        ?>
    </body>
</html>