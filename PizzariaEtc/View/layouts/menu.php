<?php
  $perfilUsuario = $usuarioLogado['perfil'];
?>
<nav class="navbar navbar-expand-lg mb-3" style="background-color: #1e81b0;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/Assets/imagens/pizza-logo.png" alt="Logo" width="50" height="30" class="d-inline-block align-text-top">
      <a href="../view" class="btn"><strong>Pizzaria ETC</strong></a>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link text-white" href="/view/usuarios/pedidos/meuspedidos.php">Meus Pedidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Meu Perfil</a>
        </li>
        <?php if ($perfilUsuario == 'ADMIN') { ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Produtos</a></li>
              <li><a class="dropdown-item" href="#">Usuários</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a href="/App/Control/logoutControl.php" class="nav-link text-white">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
