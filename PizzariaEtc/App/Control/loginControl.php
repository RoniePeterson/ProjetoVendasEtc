<?php
require_once '../Model/DAO/UsuarioDAO.php';
require_once '../Model/DTO/UsuarioDTO.php';
$email = $_POST["email"];
$password = md5($_POST["password"]);

$usuarioDTO =  new UsuarioDTO();
$usuarioDTO->setEmail($email);
$usuarioDTO->setPassword($password);

$usuarioDAO = new UsuarioDAO();
$usuario = $usuarioDAO->logar($usuarioDTO);

if ($usuario != null) {
  if(strtoupper($usuario->getStatus()) == 'INATIVO') {
    header("location: /?msg=Usuário não está ativo no sistema.");
  }
  session_start();
  $_SESSION["usuario"] = array(
    'email' => $usuario->getEmail(),
    'status' => $usuario->getStatus(),
    'perfil' => $usuario->getPerfil(),
    'nome' => $usuario->getNomeUsuario()
  );

  header("location:../../view/index.php");
} else {
  header("location: /?msg=Usuário e/ou senha inválidos");
}
