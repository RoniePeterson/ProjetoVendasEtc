<?php
/*
 * Essa classe representa o modelo da tabela.
 * DTO - Data Transfer Object
 */
class ProdutoDTO
{
  private $id;
  private $nome;
  private $valor;
  private $quantidade;
  private $categoria;
  private $imagem;

  public function getId()
  {
    return $this->id;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function getValorUnitario()
  {
    return $this->valor;
  }

  public function getQuantidade()
  {
    return $this->quantidade;
  }

  public function getCategoria()
  {
    return $this->categoria;
  }

  public function getImagem()
  {
    return $this->imagem;
  }


  public function setId($id)
  {
    $this->id = $id;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function setValorUnitario($valor)
  {
    $this->valor = $valor;
  }

  public function setQuantidade($quantidade)
  {
    $this->quantidade = $quantidade;
  }

  public function setCategoria($categoria)
  {
    $this->categoria = $categoria;
  }

  public function setImagem($imagem)
  {
    $this->imagem = $imagem;
  }
}
