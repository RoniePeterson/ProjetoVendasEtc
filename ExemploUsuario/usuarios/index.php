<?php
  require_once "../layouts/header.php";

  $conexao =  new PDO('mysql:host=localhost;dbname=aula15_exercicio02;charset=utf8', 'root','');
  // $conexao =  new PDO('sqlite:/db/database.db');
  $sql = "SELECT * from aula15_exercicio02.usuarios ORDER BY id";
  $stmt = $conexao->prepare($sql);
  $stmt->execute();
  $usuarios = $stmt->fetchAll();
?>
  <main class="container">    
    <h1>Usuários</h1>
    <hr>
    <a href="new.php" class="btn btn-success">Novo</a>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome Usuário</th>
          <th>Email</th>
          <th>Status</th>
          <th>Perfil</th>
          <th>Ações</th>
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
          <td>
            <a href="#" class="btn btn-warning btn-sm">Alterar</a>  
            <a href="#" class="btn btn-danger btn-sm">Excluir</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

  </main>
<?php require_once "../layouts/footer.php"; ?>
