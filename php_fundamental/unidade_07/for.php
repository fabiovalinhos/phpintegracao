<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $contador = 1;
            for ($contador =1; $contador <= 7; $contador ++) {
                echo rand(1,50) . " ";
            }
        ?>
    </body>
</html>