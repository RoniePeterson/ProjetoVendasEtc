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
    <form action="cadusuario.php" method="post">
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
