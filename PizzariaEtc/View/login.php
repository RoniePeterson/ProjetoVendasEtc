<?php require_once "layouts/header.php"; ?>
<body>
  <nav class="navbar mb-3"  style="background-color: #1e81b0;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="../Assets/imagens/pizza-logo.png" alt="Logo" width="50" height="30" class="d-inline-block align-text-top">
        <strong>Pizzaria ETC</strong>
      </a>
    </div>
  </nav>
  <main class="container mt-5">
    <?php include_once "layouts/alertMessage.php"; ?>

    <section id="form">
      <form method="post" action="../App/Control/loginControl.php">
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text">Informe seu e-mail</div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" required maxlength="20">
          <div id="passwordHelp" class="form-text">Informe ssua senha</div>
        </div>
        <button type="submit" class="btn btn-success">Logar</button>
        <a href="/index.php" class="btn btn-warning">Sair</a>
      </form>
    </section>
  </main>
  <?php require_once "layouts/footer.php"; ?>
