<?php

  class TypeLanguageModel extends Model
 {

    function __construct()
    {
      parent::__construct();
   
    }

    function getTypesLanguage()
    {
      $sentencia = $this->db->prepare(
        "SELECT tl.id, tl.name FROM type_language tl" 
      );
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getTypeLanguageById($id)
    {
      $sentencia = $this->db->prepare(
        "SELECT tl.id, tl.name FROM type_language tl WHERE tl.id = ?" 
      );
      $sentencia->execute([$id]);
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }
    
}

?>
