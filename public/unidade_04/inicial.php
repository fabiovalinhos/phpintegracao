<?php require_once("../../conexao/conexao.php"); ?>

<?php
// Determinar a localidade
setlocale(LC_ALL, "pt_BR");

// Consulta do banco de dados
$produtos = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena";
$produtos .= " FROM produtos";
$resultado = mysqli_query($conecta, $produtos);

if (!resultado) {
    die("Falha na consulta ao banco");
}


?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produtos.css" rel="stylesheet">
    </head>

    <body>
        <!-- Incluir o topo/header -->
        <?php include_once ("_incluir/topo.php"); ?> 
        
        <main> 
            <div id="listagem_produtos">
                <?php
                while($linha = mysqli_fetch_assoc($resultado)) {
                    ?>
                <ul>
                    <li class="imagem">
                        <img src="<?php echo $linha["imagempequena"] ?>" alt="image">
                    </li>
                    <li>
                        <h3><?php echo $linha["nomeproduto"]; ?></h3>
                    </li>
                    <li>
                        Tempo de entrega : <?php echo $linha["tempoentrega"]; ?>
                    </li>
                    <li>
                        Preço Unitário : <?php echo money_format("%.2n", $linha["precounitario"]); ?>
                    </li>
                </ul>
                <?php
                    }
                ?>
            </div>
        </main>
            
        <!-- Incluindo o rodapé/footer -->
        <?php include_once ("_incluir/rodape.php"); ?> 

    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>