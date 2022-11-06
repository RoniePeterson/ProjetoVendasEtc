<?php
require_once __DIR__.'/../Conexao.php';
require_once __DIR__.'/../DTO/UsuarioDTO.php';
class UsuarioDAO {
    
    public function logar(UsuarioDTO  $usuarioDTO){
        try{
            $con = Conexao::getInstance();
            $sql = "Select * from usuarios where EMAIL =? AND PASSWORD=?";
            $stmt = $con->prepare($sql);   
            $stmt->bindValue(1, $usuarioDTO->getEmail());
            $stmt->bindValue(2, $usuarioDTO->getPassword());
            $stmt->execute();
            $usuarioFetch = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if($usuarioFetch !=  NULL){
                $usuario = new UsuarioDTO();
                $usuario->setEmail($usuarioFetch["EMAIL"]);
                $usuario->setNomeUsuario($usuarioFetch["NOME_USUARIO"]);
                $usuario->setStatus($usuarioFetch["STATUS"]);
                $usuario->setPerfil($usuarioFetch["PERFIL"]);
                $usuario->setId($usuarioFetch["ID"]); 
                return $usuario;
            }
            return null;
        }catch(PDOException $e){
            echo $e->getMessage();
            //die() = usado para parar a execução - retirar na versão de produção
            die();
        }    
    }

    public function cadastrarUsuario(UsuarioDTO $usuarioDTO){
        try{
            $con = Conexao::getInstance();
            $sql = "INSERT INTO usuario (nome, tipoUsuario, cpf_cnpj, endereco, numero, complemento, bairro, cidade, uf, cep, loginEmail, senha) ";
            $sql .=" VALUES(?, ?, ?, ?, ?, ?, ?, ?,? ,?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getNome());
            $stmt->bindValue(2, $usuarioDTO->getTipoUsuario());
            $stmt->bindValue(3, $usuarioDTO->getCpfCnpj());
            $stmt->bindValue(4, $usuarioDTO->getEndereco());
            $stmt->bindValue(5, $usuarioDTO->getNumero());
            $stmt->bindValue(6, $usuarioDTO->getComplemento());
            $stmt->bindValue(7, $usuarioDTO->getBairro());
            $stmt->bindValue(8, $usuarioDTO->getCidade());
            $stmt->bindValue(9, $usuarioDTO->getUF());
            $stmt->bindValue(10, $usuarioDTO->getCep());
            $stmt->bindValue(11, $usuarioDTO->getLoginEmail());
            $stmt->bindValue(12, MD5($usuarioDTO->getSenha()));
   
            return $stmt->execute();
            

        }catch(PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
    
    public function listarTodos(){
        try{
            $con = Conexao::getInstance();
            $sql = "SELECT * from usuario ORDER BY nome";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }

    public function excluirUsuarioById($idUsuario){
        try{
            $con = Conexao::getInstance();
            $sql = "DELETE  from usuario WHERE idusuario=?";
            $stmt = $con->prepare($sql);
            $stmt->bindValue(1, $idUsuario);
            
           
            return $stmt->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }


    }
}
