<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
//            determinar timezone
            date_default_timezone_set('America/Sao_Paulo');
            setlocale(LC_TIME, "pt_BR");
            $agora = getdate();
        ?>
        <pre>
            <?php
//                print_r($agora);

//                criar elementos
                $ano = $agora["year"];
                $mes = strftime('%B');
                $dia = $agora["mday"];

                $hora = $agora["hours"];
                $minuto = $agora["minutes"];
                $segundo = $agora["seconds"];

                echo $dia . " de " . $mes . " de " . $ano . " - " . $hora . ":" . $minuto . ":" . $segundo . "<br>";
            ?>
        </pre>

    </body>
</html>