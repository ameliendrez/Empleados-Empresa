<?php

  class EmployeeModel extends Model
 {
    function __construct()
    {
      parent::__construct();
    }

    function getEmployeeByCompanyId($id)
    {
      $sentencia = $this->db->prepare(
        "SELECT e.id, e.name, e.last_name, e.age, e.type_employee, e.type_language, e.type_designer
        FROM employee e
        LEFT JOIN  company_employee ce ON (e.id = ce.id_employee)
        WHERE ce.id_company = ?" 
      );
      $sentencia->execute([$id]);
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getEmployeeById($id)
    {
      $sentencia = $this->db->prepare(
        "SELECT e.id, e.name, e.last_name, e.age, e.type_employee, e.type_language, e.type_designer
        FROM employee e WHERE e.id = ?" 
      );
      $sentencia->execute([$id]);
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }   
}

?>
