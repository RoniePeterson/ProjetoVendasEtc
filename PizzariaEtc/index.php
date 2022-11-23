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
    <div class="d-flex flex-wrap">
      <?php foreach ($produtos as $produto) { ?>
        <div class="card mt-2 me-3" style="width: 18rem;">
          <img src="Assets/imagens/produtos/<?= $produto->getImagem(); ?>" alt=".." class="card-img-top" style="height: 13rem;">
          <div class="card-body">
            <div class="card-title">
              <p><?= $produto->getNome(); ?></p>
              <p>R$ <?= $produto->getValorUnitario(); ?></p>
              <a href="" class="btn btn-sm btn-primary">Comprar</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </section>


</main>
<?php require_once "view/layouts/footer.php"; ?>
