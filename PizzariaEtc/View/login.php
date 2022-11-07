<?php

?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pizzaria ETC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

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
      </form>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
