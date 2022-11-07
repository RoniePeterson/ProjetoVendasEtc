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

if ($usuario == null) {
  header("location: ../../view/login.php?msg=Usuário e/ou senha inválidos");
  die;
}

if (strtoupper($usuario->getStatus()) == 'INATIVO') {
  header("location: ../../view/login.php?msg=Usuário não está ativo no sistema.");
  die;
}

session_start();
$_SESSION["usuario"] = array(
  'email' => $usuario->getEmail(),
  'status' => $usuario->getStatus(),
  'perfil' => $usuario->getPerfil(),
  'nome' => $usuario->getNomeUsuario(),
  'id' => $usuario->getId()
);
header("location: ../../view/index.php");
