<?php require_once("../../conexao/conexao.php"); ?>

<?php
    if ( isset($_GET["codigo"]) ){
        $produto_id = $_GET["codigo"];
    } else {
        Header("Location: inicial.php");
    }

    // Consulta ao banco de dados
    $consulta = "SELECT * ";
    $consulta .= "FROM produtos ";
    $consulta .= "WHERE produtoID = {$produto_id}";
    $detalhe = mysqli_query($conecta, $consulta);

    // Testar erro
    if (!$detalhe) {
        die("Erro no banco de dados");
    } else {
        $dados_detalhe = mysqli_fetch_assoc($detalhe);
        $produtoID = $dados_detalhe["produtoID"];
        $nomeproduto = $dados_detalhe["nomeproduto"];
        $descricao = $dados_detalhe["descricao"];
        $codigobarra = $dados_detalhe["codigobarra"];
        $tempoentrega = $dados_detalhe["tempoentrega"];
        $precorevenda = $dados_detalhe["precorevenda"];
        $precounitario = $dados_detalhe["precounitario"];
        $estoque = $dados_detalhe["estoque"];
        $imagemgrande = $dados_detalhe["imagemgrande"];
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link rel="stylesheet" href="_css/produto_detalhe.css">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>
            <div id="detalhe_produto">
                <ul>
                    <li class="imagem"><img src="<?php echo $imagemgrande ?>" alt="imagem produto"></li>
                    <!-- </li><?php echo $imagemgrande ?><li> -->
                    <li><H3><?php echo $nomeproduto ?></H3></li>
                    <li><b>Descrição:</b><?php echo $descricao ?></li>
                    <li><b>Código de barra:</b><?php echo $codigobarra ?></li>
                    <li><b>Tempo de entrega:</b><?php echo $tempoentrega ?></li>
                    <li><b>Preço de revenda:</b><?php echo " R$ " . number_format($precorevenda, 2, ",", ".") ?></li>
                    <li><b>Preço unitário:</b><?php echo " R$ " . number_format($precounitario, 2,",",".") ?></li>
                    <li><b>Estoque:</b><?php echo $estoque ?></li>
                </ul>
            </div>
        </main>

        <?php include_once("_incluir/rodape.php"); ?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>