<?php
session_start();
require_once  "../../../App/Control/verificaLogadoControl.php";
require_once "../../layouts/header.php";
require_once  "../../layouts/menu.php";
?>
<section class="container mt-3">
  <h1>Meus pedidos</h1>

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
        <tr>
          <td>1</td>
          <td>2022050001</td>
          <td>2022-10-11</td>
          <td>22.89</td>
          <td>CONCLUÍDO</td>
          <td style="width:5%;"><a href="#" class="btn btn-success btn-sm">Detalhes</a></td>
        </tr>
      </tbody>
    </table>
  </section>

</section>

<?php require_once "../../layouts/footer.php"; ?>
