<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            include("pagina2.php");
            echo "<br>";
            include_once("pagina1.php");
            echo "<br>";
            include_once("pagina1.php");
        ?>
    </body>
</html>