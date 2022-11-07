<?php
session_start();
require_once  "../../../App/Control/verificaLogadoControl.php";
require_once "../../layouts/header.php";
require_once  "../../layouts/menu.php";
require_once  "../../../App/Model/DAO/PedidosDAO.php";

if (!isset($_GET['id'])) {
  header('location: meuspedidos.php');
}
$id = (int)$_GET['id'];
$pedidosDAO = new PedidosDAO();
$pedidos = $pedidosDAO->listarPedidosProdutosByIdPedidos($id);
if (!$pedidos) {
  header('location: meuspedidos.php?msg=Pedido não encontrado.');
}
$qtd = 1;
$pedido = $pedidos[0];
?>
<section class="container mt-3">
  <h1>Detalhes do pedidos</h1>

  <section class="mt-3">
    <div class="card">
      <div class="card-header">
        <strong>Pedido</strong>
      </div>
      <div class="card-body">
        <h5 class="card-title">Número: <span><?= $pedido['NUMERO']; ?></span></h5>
        <p class="card-text"><strong>Data: </strong><?= $pedido['DATA']; ?></p>
        <p class="card-text"><strong>Valor: </strong><?= $pedido['TOTAL']; ?></p>
        <p class="card-text"><span class="badge text-bg-<?= ($pedido['STATUS'] == 'CANCELADO' ? 'danger' : 'success'); ?>"><?= $pedido['STATUS']; ?></span></p>
        <a href="meuspedidos.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>
  </section>

  <section class="mt-2 mb-3">
    <div class="card">
      <div class="card-header">
        Itens do Pedido
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Produto</th>
              <th>Quantidade</th>
              <th>Valor</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($pedidos) {
              foreach ($pedidos as $item) { ?>
                <tr>
                  <td><?= $qtd; ?></td>
                  <td><?= $item['NOME']; ?></td>
                  <td><?= $item['QUANTIDADE']; ?></td>
                  <td><?= $item['VALOR']; ?></td>
                </tr>
              <?php
                $qtd++;
              }
            } else { ?>
              <tr>
                <td colspan="4">Não existem itens cadastrados.</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</section>

<?php require_once "../../layouts/footer.php"; ?>
