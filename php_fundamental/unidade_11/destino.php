<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
            <?php
                print_r($_POST);
            ?>

        </pre>
            <?php
                $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Nome não definido";
                $email = isset($_POST["email"]) ? $_POST["email"] : "Email não definido";

                echo "Meu nome: " . $nome . "<br>";
                echo "Meu email: " . $email . "<br>";
            ?>
    </body>
</html>