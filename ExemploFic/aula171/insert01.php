<?php
    // cria uma variavel user com o nome do usuario do banco de dados    
    $user = "root";
    // cria uma variavel password com a senha usuario do banco de dados    
    $password = "";
    // cria uma variavel dsn que armazena a string de conexão com o banco de dados    
    $dsn = "mysql:localhost;dbname=aula171_exemplo03;";
        
    // cria uma variavel que armazena a conexão com o banco de dados    
    $conexao = new PDO($dsn, $user, $password);
    
    // cria uma variavel com o comando DML para inserir dados na tabela usuario    
    $query = "INSERT INTO aula171_exemplo03.USUARIOS 
            (NOMEUSUARIO, EMAIL, PASSWORD, PERFIL, STATUS)
            VALUES
            ('ronie.santos', 'ronie.santos@etcdf.com', 
            MD5('123'), 'ADMIN', 'ATIVO');";

    // cria uma variavel chamada sth e informa para a conexao para se preparar
    // para executar o comando insert que esta na variavel query.
    $sth = $conexao->prepare($query);

    // executa o insert no banco de dados.
    $sth->execute();


    // exibir valor de variaveis. Debuga uma ou mais variaveis
    // var_dump($dsn);
?>
