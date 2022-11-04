<?php
session_start();
require_once "layouts/header.php";
require_once  "layouts/menu.php";


if (!isset($_SESSION['usuario'])) {
  header('location: /');
}
?>
<section class="container mt-3">
  <h1>Pizzaria ETC</h1>
</section>

<?php require_once "layouts/footer.php"; ?>
