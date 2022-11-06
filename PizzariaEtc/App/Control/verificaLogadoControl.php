<?php
if (!isset($_SESSION['usuario'])) {
  header('location: /');
}

$usuarioLogado = [
  'email' => $_SESSION['usuario']['email'],
  'status' => $_SESSION['usuario']['status'],
  'perfil' => $_SESSION['usuario']['perfil'],
  'nome' => $_SESSION['usuario']['nome'],
  'id' => $_SESSION['usuario']['id']
] ;
