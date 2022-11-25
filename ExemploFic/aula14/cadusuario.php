<?php
    include 'conexao.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nomeusuario = $_POST['nomeusuario'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $perfil = $_POST['perfil'];
        $status = $_POST['status'];
        
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
