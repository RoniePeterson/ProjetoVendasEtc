<?php
require_once "Env.php";

class Conexao
{
  private static $conexao;
  private function __construct()
  {
  }

  public static function getInstance()
  {
    if (!isset(self::$conexao)) {
      try {
        self::$conexao =  new PDO(
          'mysql:host=' . Env::DATABASE_HOST .
            ';port=' . Env::DATABASE_PORT .
            ';dbname=' . Env::DATABASE_DBNAME . ';charset=utf8',
          Env::DATABASE_USERNAME,
          Env::DATABASE_PASSWORD
        );
        self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $ex) {
        echo "Erro ao conectar ao banco de dados " . $ex->getMessage();
      }
    }
    return self::$conexao;
  }
}
