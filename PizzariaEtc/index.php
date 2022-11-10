<?php
require_once "view/layouts/header.php";
include "view/layouts/navbarCarrinho.php";
require_once "App/Model/DTO/ProdutoDTO.php";
require_once "App/Model/DAO/ProdutoDAO.php";

$alterouCategoriaProduto = false;
$produtosDAO = new ProdutoDAO();
$produtos = $produtosDAO->listarTodos();
// if($produtos) {
//   $categoriaProduto = $produtos[0]->getCategoria();
// }
// echo '<pre>';
// print_r($produtos);
?>

<main class="container">
  <section id="filtro">
    <form action="" method="get">
      <div class="row d-flex">
        <select name="categoria" id="categoria" class="form-select">
          <option selected>Todos</option>
          <option value="1">Pizza</option>
          <option value="2">Esfirra</option>
          <option value="3">Bebidas</option>
        </select>
        <input type="submit" class="btn btn-sm btn-primary" value="Filtrar">
      </div>
    </form>
  </section>

  <section>
    <?php foreach ($produtos as $produto) { ?>
      <?=$produto->getNome();?>
    <?php } ?>
  </section>


</main>
<?php require_once "view/layouts/footer.php"; ?>
