<?php require_once("../../conexao/conexao.php"); ?>
<?php
    
    // Consulta a tabela transportadoras
    $tr = "SELECT * ";
    $tr .= "FROM transportadoras ";

    if (isset($_GET["codigo"])) {
        $id = $_GET["codigo"];
        $tr .= "WHERE transportadoraID = {$id} ";
    } else {
        $tr .= "WHERE transportadoraID = 1 ";
    }

    $con_transportadora = mysqli_query($conecta, $tr);
    if (!$con_transportadora) {
        die("Conexão falhou com o banco de dados");
    }

    // preencher os campos que serão alterado
    $info_transportadora = mysqli_fetch_assoc($con_transportadora);

    print_r($info_transportadora);

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>  
            <div id="janela_formulario">
                <form action="alteracao.php" method="post">
                    <h2>Alteração de Transportadoras</h2>

                    <label for="nometransportadora">Nome da Transportadora</label>
                    <input type="text" value="" name="nometransportadora" id="nometransportadora">

                    <label for="endereco"Endereço></label>
                    <input type="text" value="" name="enderco" id="endereco">

                    <label for="cidade">Cidade</label>
                    <input type="text" value="" name="cidade" id="cidade">

                    <label for="estados">Estados</label>
                    <select type="text" value="" name="estados" id="estados"></select>

                    <label for="cep">CEP</label>
                    <input type="text" value="" name="cep" id="cep">

                    <label for="telefone">Telefone</label>
                    <input type="text" value="" name="telefone" id="telefone">

                    <label for="cnpj">CNPJ</label>
                    <input type="text" value="" name="cnpj" id="cnpj">

                    <input type="submit" value="Confirmar alterações">
                </form>
            </div>
            
        </main>

        <?php include_once("_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>