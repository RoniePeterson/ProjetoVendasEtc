<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
    <link rel="stylesheet" type="text/css" href="../CSS/estilo_cadastro.css">
    <link rel="stylesheet" type="text/css" href="../CSS/estilo_tabela.css">

    <!--Links ícones-->
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">

</head>
<body>
    <!--Início da barra de navegação-->
    <div id="container">
    <?php
    include "menu.php";
    ?>
    </div>
 <!--Fim da barra de navegação-->
 <div id="container_tabela">
     <?php
        require_once "../Model/DAO/ProdutoDAO.php";
        $produtoDAO = new ProdutoDAO();
        $produtos = $produtoDAO->listarTodos();

     ?>
    <h1>LISTA DE PRODUTOS CADASTRADOS</h1>
    <table id="tabela_lista_usuario">
        <thead>
            <tr>
                <th>DESCRIÇÃO</th>
                <th>VALOR UNITÁRIO</th>
                <th>CÓDIGO</th>
                <th>IMAGEM</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($produtos as $prod ){
            ?>
            <tr>
                <td><?php echo $prod["descricao"];?></td>
                <td><?=$prod["valor_unitario"] ?></td>
                <td><?=$prod["codigo"]?></td>
                <td><?=isset($prod["imagem"]) ? $prod["imagem"] : "Sem Imagem"?></td>
                <td>
                    <a href="#" title="ALTERAR"> <i class="fa fa-edit fa-lg"></i></a>
                    <a href="../control/excluirProdutoControl.php?id=<?=$prod["idproduto"] ?>" 
                    title="EXCLUIR"><i class="fa fa-trash fa-lg"></i></a>
                </td>
            </tr>
            <?php
                }
            ?>
 
            
        </tbody>
    </table>
    <div id="rodape_container"></div>
</div>


</body>
</html>