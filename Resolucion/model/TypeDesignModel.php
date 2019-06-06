<?php

  class TypeDesignModel extends Model
 {

    function __construct()
    {
      parent::__construct();
   
    }

    function getTypesDesign()
    {
      $sentencia = $this->db->prepare(
        "SELECT td.id, td.name FROM type_design td" 
      );
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getTypeDesignById($id)
    {
      $sentencia = $this->db->prepare(
        "SELECT td.id, td.name FROM type_design td WHERE td.id = ?" 
      );
      $sentencia->execute([$id]);
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }
}

?>
