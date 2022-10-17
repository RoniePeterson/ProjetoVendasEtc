<?php
  $conexao =  new PDO('mysql:host=localhost;dbname=aula15_exercicio02;charset=utf8', 'root','');
  $sql = "SELECT * from aula15_exercicio02.usuarios ORDER BY id";
  $stmt = $conexao->prepare($sql);
  $stmt->execute();
  $usuarios = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Usuários</title>
</head>
<body>
  <main class="container">    
    <h1>Usuários</h1>
    <hr>
    <a href="cadastrarusuario.php" class="btn btn-success">Novo</a>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome Usuário</th>
          <th>Email</th>
          <th>Status</th>
          <th>Perfil</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($usuarios as $usuario) { ?>
        <tr>
          <td><?=$usuario['ID'] ?></td>
          <td><?=$usuario['NOME_USUARIO'] ?></td>
          <td><?=$usuario['EMAIL'] ?></td>
          <td><?=$usuario['STATUS'] ?></td>
          <td><?=$usuario['PERFIL'] ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

  </main>
</body>
</html>
