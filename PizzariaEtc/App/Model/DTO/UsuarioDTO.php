<?php
/*
 * Essa classe representa o modelo da tabela.
 * DTO - Data Transfer Object
 */
class UsuarioDTO
{
  private $id;
  private $nomeUsuario;
  private $email;
  private $password;
  private $status;
  private $perfil;
  private $dataCadastro;

  public function getId()
  {
    return $this->id;
  }

  public function getNomeUsuario()
  {
    return $this->nomeUsuario;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function getPerfil()
  {
    return $this->perfil;
  }

  public function getDataCadastro()
  {
    return $this->dataCadastro;
  }


  public function setId($id)
  {
    $this->id = $id;
  }

  public function setNomeUsuario($nomeUsuario)
  {
    $this->nomeUsuario = $nomeUsuario;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function setPerfil($perfil)
  {
    $this->perfil = $perfil;
  }

  public function setDataCadastro($dataCadastro)
  {
    $this->dataCadastro = $dataCadastro;
  }
}
