<?php
require_once "../layouts/header.php";
$conexao =  new PDO('mysql:host=localhost;dbname=aula15_exercicio02;charset=utf8', 'root', '');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nomeusuario = $_POST['nomeusuario'];
  $email = $_POST['email'];
  $password = MD5($_POST['password']);
  $status = $_POST['status'];
  $perfil = $_POST['perfil'];

  $sql = "INSERT INTO aula15_exercicio02.usuarios (nome_usuario, email, password, status, perfil) ";
  $sql .= " VALUES(?, ?, ?, ?, ? )";
  $stmt = $conexao->prepare($sql);
  $stmt->bindValue(1, $nomeusuario);
  $stmt->bindValue(2, $email);
  $stmt->bindValue(3, $password);
  $stmt->bindValue(4, $status);
  $stmt->bindValue(5, $perfil);

  $stmt->execute();

  header('location: index.php');
}

?>
<div class="container">
  <h1>Cadastro de Usuários</h1>
  <hr>
  <form action="" method="post">
    <div class="mb-3">
      <label for="nomeusuario" class="form-label">Nome do Usuário</label>
      <input type="text" class="form-control" name="nomeusuario" id="nomeusuario" required placeholder="Informe o nome do usuário" autofocus>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control" name="email" id="email" required placeholder="Informe o e-mail do usuário">
    </div>


    <div class="mb-3">
      <label for="password" class="form-label">Senha</label>
      <input type="password" class="form-control" name="password" id="password" required>
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Nome do Usuário</label>
      <select class="form-select" aria-label="Default select example" name="status" id="status">
        <option value="ATIVO" selected>ATIVO</option>
        <option value="INATIVO">INATIVO</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="perfil" class="form-label">Nome do Usuário</label>
      <select class="form-select" aria-label="Default select example" name="perfil" id="perfil">
        <option value="USUARIO" selected>Usuário</option>
        <option value="ADMIN">Admin</option>
      </select>
    </div>

    <input type="submit" value="Cadastrar" class="btn btn-primary">
    <a href="index.php" class="btn btn-warning">Voltar</a>
  </form>
</div>
<?php require_once "../layouts/footer.php"; ?>
