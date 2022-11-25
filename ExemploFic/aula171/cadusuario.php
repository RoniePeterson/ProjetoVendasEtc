<?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nomeusuario = $_POST['nomeusuario'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $perfil = $_POST['perfil'];
        $status = $_POST['status'];
        
        // var_dump($nomeusuario, $email, $senha, $perfil, $status);

        $user = "root";
        $password = "";
        $dsn = "mysql:localhost;dbname=aula171_exemplo03;";
        
        $conexao = new PDO($dsn, $user, $password);
        
        $query = "INSERT INTO aula171_exemplo03.USUARIOS 
                (NOMEUSUARIO, EMAIL, PASSWORD, PERFIL, STATUS)
                VALUES
                (:nomeusuario, :email, :senha, :perfil, :status);";

        // cria uma variavel chamada sth e informa para a conexao para se preparar
        // para executar o comando insert que esta na variavel query.
        $sth = $conexao->prepare($query);

        // executa o insert no banco de dados.
        $sth->execute(array(
                        'nomeusuario' => $nomeusuario, 
                        'email' => $email, 
                        'senha' => $senha, 
                        'perfil' => $perfil, 
                        'status' => $status)
                );
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastrar usuário</h2>
    <form action="" method="post">
        <p>Nome do usuário</p>
        <p><input type="text" name="nomeusuario" required placeholder="Informe o nome do usuario." autofocus></p>
        <p>E-mail</p>
        <p><input type="text" name="email" required placeholder="Informe o e-mail do usuario."></p>
        <p>Senha</p>
        <p><input type="password" name="senha" required ></p>
        <p>Perfil</p>
        <select name="perfil">
            <option value="USUARIO">Usuário</option>
            <option value="ADMIN">Admin</option>
        </select>
        <p>Status</p>
        <select name="status">
            <option value="ATIVO">Ativo</option>
            <option value="INATIVO">Inativo</option>
        </select>
        <p>
            <input type="submit" value="Cadastrar">
        </p>
    </form>
</body>
</html>