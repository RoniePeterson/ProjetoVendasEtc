<?php
session_start();
require_once  "../../../App/Control/verificaLogadoControl.php";
require_once "../../layouts/header.php";
require_once  "../../layouts/menu.php";
require_once "../../../App/Control/meusPedidosControl.php";
$qtd = 1;
?>
<section class="container mt-3">
  <h1>Meus pedidos</h1>

  <?php include_once "../../layouts/alertMessage.php"; ?>
  
  <section class="mt-3">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Número</th>
          <th>Data</th>
          <th>Total</th>
          <th>Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php 
        if($pedidos) {
          foreach($pedidos as $pedido){ ?>
          <tr>
            <td><?=$qtd;?></td>
            <td><?=$pedido->getNumeroPedido();?></td>
            <td><?=$pedido->getDataCadastro();?></td>
            <td><?=$pedido->getValorTotal();?></td>
            <td><?=$pedido->getStatus();?></td>
            <td style="width:5%;">
              <a href="/View/usuarios/pedidos/detalhepedido.php?id=<?=$pedido->getId();?>"  
                class="btn btn-success btn-sm">Detalhes</a>
            </td>
          </tr>
        <?php 
          $qtd++; }
          } else {?>
          <tr>
            <td colspan="6">Não existem pedidos cadastrados.</td>
          </tr>    
        <?php } ?>
      </tbody>
    </table>
  </section>

</section>

<?php require_once "../../layouts/footer.php"; ?>
