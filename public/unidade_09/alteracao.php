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

    // consulta aos estados
    $estados = "SELECT * ";
    $estados .= "FROM estados ";
    $lista_estados = mysqli_query($conecta, $estados);
    if(!$lista_estados) {
        die("Erro no banco de dados");
    }

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
                    <input type="text" value="<?php echo $info_transportadora['nometransportadora'] ?>" name="nometransportadora" id="nometransportadora">

                    <label for="endereco"Endereço></label>
                    <input type="text" value="<?php echo $info_transportadora['endereco'] ?>" name="enderco" id="endereco">

                    <label for="cidade">Cidade</label>
                    <input type="text" value="<?php echo $info_transportadora['cidade'] ?>" name="cidade" id="cidade">

                    <!-- trabalhando dinamicamente os estados -->
                    <label for="estados">Estados</label>
                    <select name="estados" id="estados">
                        <?php
                            $meuestado = $info_transportadora["estadoID"];
                            while($linha = mysqli_fetch_assoc($lista_estados)) {
                                $estado_principal = $linha["estadoID"];
                                if ($meuestado == $estado_principal) {
                        ?>
                            <option value="<?php echo $linha["estadoID"] ?>" selected>
                                <?php echo $linha["nome"] ?>
                            </option>

                        <?php
                            } else {
                        ?>
                            <option value="<?php echo $linha["estadoID"] ?>">
                                <?php echo $linha["nome"] ?>
                            </option>
                        <?php
                                }
                            }
                        ?>

                    </select>

                    <label for="cep">CEP</label>
                    <input type="text" value="<?php echo $info_transportadora['cep'] ?>" name="cep" id="cep">

                    <label for="telefone">Telefone</label>
                    <input type="text" value="<?php echo $info_transportadora['telefone'] ?>" name="telefone" id="telefone">

                    <label for="cnpj">CNPJ</label>
                    <input type="text" value="<?php echo $info_transportadora['cnpj'] ?>" name="cnpj" id="cnpj">

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