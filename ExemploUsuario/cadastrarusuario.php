<?php
  $conexao =  new PDO('mysql:host=localhost;dbname=aula15_exercicio02;charset=utf8', 'root','');
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomeusuario = $_POST['nomeusuario'];
    $email = $_POST['email'];
    $password = MD5($_POST['password']);
    $status = $_POST['status'];
    $perfil = $_POST['perfil'];
  
    $sql = "INSERT INTO aula15_exercicio02.usuarios (nome_usuario, email, password, status, perfil) ";
    $sql .=" VALUES(?, ?, ?, ?, ? )";
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Novo Usuário</title>
</head>
<body>
  <div class="container">
    <h1>Cadastro de Usuários</h1>
    <hr>
    <form action="" method="post">
      <div class="mb-3">
        <label for="nomeusuario" class="form-label">Nome do Usuário</label>
        <input type="text" class="form-control" name="nomeusuario" id="nomeusuario"  required placeholder="Informe o nome do usuário" autofocus>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email"  required placeholder="Informe o e-mail do usuário">
      </div>


      <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" name="password" id="password"  required >
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
</body>
</html>
