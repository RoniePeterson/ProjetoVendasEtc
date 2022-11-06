<?php
require_once __DIR__ . '/../Conexao.php';
require_once __DIR__ . '/../DTO/PedidosDTO.php';
class PedidosDAO
{

  public function cadastrarProduto(PedidosDTO $pedidosDTO)
  {
    try {
      $con = Conexao::getInstance();
      $sql = "INSERT INTO produto (descricao, valor_unitario, codigo, imagem) ";
      // $sql .=" VALUES(?, ?, ?, ? )";
      $stmt = $con->prepare($sql);
      // $stmt->bindValue(1, $produtoDTO->getDescricao());
      // $stmt->bindValue(2, $produtoDTO->getValorUnitario);
      // $stmt->bindValue(3, $produtoDTO->getCodigo());
      // $stmt->bindValue(4, $produtoDTO->getImagem());

      return $stmt->execute();
    } catch (PDOException $e) {
      echo $e->getMessage();
      die();
    }
  }

  public function listarTodos()
  {
    try {
      $con = Conexao::getInstance();
      $sql = "SELECT * from produto ORDER BY codigo";
      $stmt = $con->prepare($sql);
      $stmt->execute();
      $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $produtos;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listarPedidosByUsuario($usuario_id)
  {
    try {
      $con = Conexao::getInstance();
      $sql = "SELECT * from pedidos WHERE USUARIO_ID=?";
      $stmt = $con->prepare($sql);
      $stmt->bindValue(1, $usuario_id);
      $stmt->execute();
      $pedidos = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $pedidos;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function excluirPedidosById($idproduto)
  {
    try {
      $con = Conexao::getInstance();
      $sql = "DELETE  from produto WHERE idproduto=?";
      $stmt = $con->prepare($sql);
      $stmt->bindValue(1, $idproduto);

      return $stmt->execute();
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
