<?php

  class CompanyModel extends Model
 {

    function __construct()
    {
      parent::__construct();
   
    }

    function getCompanyById($id)
    {
      $sentencia = $this->db->prepare(
        "SELECT c.id, c.name FROM company c WHERE c.id = ?" 
      );
      $sentencia->execute([$id]);
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    function addEmployee($idEmployee, $idCompany)
    {
      $sentencia = $this->db->prepare(
        "INSERT INTO  company_employee (id_employee, id_company)
        VALUES (?, ?)" 
      );
      $sentencia->execute([$idEmployee, $idCompany]);
    }
    
}

?>
