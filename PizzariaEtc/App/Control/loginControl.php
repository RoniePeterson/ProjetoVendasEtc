<?php
require_once '../Model/DAO/UsuarioDAO.php';
require_once '../Model/DTO/UsuarioDTO.php';
$email = $_POST["email"];
$password = md5($_POST["password"]);

$usuarioDTO =  new UsuarioDTO();
$usuarioDTO->setEmail($email);
$usuarioDTO->setPassword($password);

$usuarioDAO= new UsuarioDAO();
$usuarioLogado = $usuarioDAO->logar($usuarioDTO);

if ($usuarioLogado!=null ) {
    session_start();
    $_SESSION["usuario"] = array(
      'email' => $usuarioLogado->getEmail(),
      'status' => $usuarioLogado->getStatus(),
      'perfil' => $usuarioLogado->getPerfil(),
      'nome' => $usuarioLogado->getNomeUsuario()
    );
    
    header("location:../../view/index.php");
} else {
   header ( "location:../../view/login.php?msg=usuário e/ou senha inválidos" ); 
}



