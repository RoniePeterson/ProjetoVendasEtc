<?php
require_once  "../../../App/Model/DAO/PedidosDAO.php";
require_once  "../../../App/Model/DTO/PedidosDTO.php";
$pedidosDAO = new PedidosDAO();
$pedidosArray = $pedidosDAO->listarPedidosByUsuario($usuarioLogado['id']);
$pedidos = array();
foreach ($pedidosArray as $pedido) {
  $item = new PedidosDTO();
  $item->setId($pedido['ID']);
  $item->setNumeroPedido($pedido['NUMERO']);
  $item->setDataCadastro($pedido['DATA']);
  $item->setValorTotal($pedido['TOTAL']);
  $item->setStatus($pedido['STATUS']);

  $pedidos[] = $item;
}
