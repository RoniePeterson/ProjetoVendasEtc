<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">

</head>
<body>
    <!--Início da barra de navegação-->
    <div id="container">
        <nav>
            <ul>
                <li id="logo">
                    LOJA DE INFORMÁTICA
                </li>
           </ul>
        </nav>
    </div>
    <?php  
            if(isset($_GET["msg"])){
                $msg= $_GET["msg"];
                echo $msg;
            }
       ?>
   </div>
 <!--Fim da barra de navegação-->
 <div id="container_login">
     <img src="../imagens/usuario.png" width="200px" height="200px" alt="usuario">
     <form action="../Control/loginControl.php" method="POST">
        <div>
            <input type="text" name="email" id="email" class="email" placeholder="Digite seu e-mail">
        </div>
        <div>
            <input type="password" name="senha" id="senha" class="senha" placeholder="Digite sua senha">
        </div>
        <div>
            <input type="submit" class="submit" value="Logar">
        </div>

     </form>

 </div>
</body>
</html>