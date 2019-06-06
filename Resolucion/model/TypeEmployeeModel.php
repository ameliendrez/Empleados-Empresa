<?php

  class TypeEmployeeModel extends Model
 {

    function __construct()
    {
      parent::__construct();
   
    }

    function getTypesEmployee()
    {
      $sentencia = $this->db->prepare(
        "SELECT te.id, te.name FROM type_employee te" 
      );
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getTypeEmployeeById($id)
    {
      $sentencia = $this->db->prepare(
        "SELECT te.id, te.name FROM type_employee te WHERE te.id = ?" 
      );
      $sentencia->execute([$id]);
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }
    
}

?>
