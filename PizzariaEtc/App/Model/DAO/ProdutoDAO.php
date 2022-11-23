<?php
require_once __DIR__.'/../Conexao.php';
require_once __DIR__.'/../DTO/produtoDTO.php';
class ProdutoDAO {
    
    public function cadastrarProduto(ProdutoDTO $produtoDTO){
        try{
            $con = Conexao::getInstance();
            $sql = "INSERT INTO produtos (nome, valor, quantidade, categoria, imagem) ";
            $sql .=" VALUES(?, ?, ?, ? )";
            $stmt = $con->prepare($sql);
            $stmt->bindValue(1, $produtoDTO->getNome());
            $stmt->bindValue(2, $produtoDTO->getValorUnitario);
            $stmt->bindValue(3, $produtoDTO->getQuantidade());
            $stmt->bindValue(4, $produtoDTO->getCategoria());
            $stmt->bindValue(5, $produtoDTO->getImagem());
            
            return $stmt->execute();
            

        }catch(PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
    
    public function listarTodos(){
        $produtos = array();
        try{
            $con = Conexao::getInstance();
            $sql = "SELECT * from produtos ORDER BY categoria";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $produtosFetch = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($produtosFetch) {
              foreach ($produtosFetch as $produto) {
                $item = new ProdutoDTO();
                $item->setId($produto['ID']);
                $item->setNome($produto['NOME']);
                $item->setQuantidade($produto['QUANTIDADE']);
                $item->setValorUnitario($produto['VALOR']);
                $item->setCategoria($produto['CATEGORIA']);
                $item->setImagem($produto['IMAGEM']);
              
                $produtos[] = $item;
              }
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $produtos;        
    }

    public function excluirProdutoById($idproduto){
        try{
            $con = Conexao::getInstance();
            $sql = "DELETE  from produto WHERE idproduto=?";
            $stmt = $con->prepare($sql);
            $stmt->bindValue(1, $idproduto);
            
           
            return $stmt->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }
}
