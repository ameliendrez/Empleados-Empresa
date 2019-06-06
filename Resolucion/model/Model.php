<?php
  include_once 'config/db-config.php';

  class Model
  {

    protected $db;

    function __construct()
    {
      $this->connect();
    }

    private function connect(){
      try {
        $this->db = new PDO('mysql:host='.DB_HOST.';'
        .'dbname='.DB_NAME.';charset=utf8'
        , DB_USER, DB_PASSWORD);
      }
      catch (PDOException $e)
      {
        $this->buildDDBBfromFile();
      }
    }

    private function buildDDBBfromFile() {
      try {
        $connection = new PDO('mysql:host='.DB_HOST, DB_USER, DB_PASSWORD);
        $connection->exec('CREATE DATABASE IF NOT EXISTS '.DB_NAME);
        $connection->exec('USE '. DB_NAME);
        echo "<strong>Generando base de datos</strong>";
        $queries = $this->loadSQLSchema();
        $connection->exec($queries);
        $this->connect();
        header('Location: '. HOME);
      } catch (PDOException $e) {
        echo $e;
      }
    }
    
    private function loadSQLSchema()
    {
      $file = fopen(DB_FILE, "r");
      $getSentencias = "";
      while(! feof($file))
      {
        $getSentencias .= fgets($file);
      }
      fclose($file);
      return $getSentencias;
    }
  }
?>
