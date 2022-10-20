<?php
    // cria uma variavel user com o nome do usuario do banco de dados    
    $user = "root";
    // cria uma variavel password com a senha usuario do banco de dados    
    $password = "";
    // cria uma variavel dsn que armazena a string de conexão com o banco de dados    
    $dsn = "mysql:localhost;dbname=aula171_exemplo03;";
        
    // cria uma variavel que armazena a conexão com o banco de dados    
    $conexao = new PDO($dsn, $user, $password);
    
    echo 'Conexão realizada com sucesso.'
    // exibir valor de variaveis. Debuga uma ou mais variaveis
    // var_dump($dsn);
?>
