<?php

class PedidosDTO
{
  private $id;
  private $numero;
  private $data;
  private $total;
  private $status;
  private $observacao;
  private $usuario;

  public function getId()
  {
    return $this->id;
  }

  public function getNumeroPedido()
  {
    return $this->numero;
  }

  public function getDataCadastro()
  {
    return $this->data;
  }

  public function getValorTotal()
  {
    return $this->total;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function getObservacao()
  {
    return $this->observacao;
  }

  public function getUsuario()
  {
    return $this->usuario;
  }

  
  public function setId($id)
  {
    $this->id = $id;
  }

  public function setNumeroPedido($numero)
  {
    $this->numero = $numero;
  }

  public function setDataCadastro($data)
  {
    $this->data = $data;
  }

  public function setValorTotal($total)
  {
    $this->total = $total;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function setObservacao($observacao)
  {
    $this->observacao = $observacao;
  }

  public function setUsuario($usuario)
  {
    $this->usuario = $usuario;
  }

}
