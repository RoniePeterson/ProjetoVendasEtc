<?php
require_once "../../model/Conexao.php";

$conn = Conexao::getInstance();

if($conn) {
  echo 'Conexão estabelecidad com sucesso!';
}
