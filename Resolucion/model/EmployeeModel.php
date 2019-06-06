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
        "SELECT e.id, e.name, e.last_name, e.age, e.type_employee, e.type_language, e.type_design
        FROM employee e
        INNER JOIN  company_employee ce ON (e.id = ce.id_employee)
        WHERE ce.id_company = ?" 
      );
      $sentencia->execute([$id]);
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getEmployeeById($id)
    {
      $sentencia = $this->db->prepare(
        "SELECT e.id, e.name, e.last_name, e.age, e.type_employee, e.type_language, e.type_design
        FROM employee e WHERE e.id = ?" 
      );
      $sentencia->execute([$id]);
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }  
    
    function saveEmployee($employee)
    {
      $queryValues = "";
      /* var_dump($employee->getSpeciality()->getId());
      die(); */
      if ($employee->getTypeEmployee()->getName()=="Developer"){
        $queryValues = "(name, last_name, age, type_employee, type_language)"; 
      }
      else{
        $queryValues = "(name, last_name, age, type_employee, type_design)"; 
      }
      $sentencia = $this->db->prepare(
        "INSERT INTO  employee " . $queryValues .  " VALUES (?, ?, ?, ?, ?)" 
      );
      $sentencia->execute([$employee->getName(), $employee->getLastName(), $employee->getAge(), $employee->getTypeEmployee()->getId(), $employee->getSpeciality()->getId()]);
      return $this->db->lastInsertId();
    }
}

?>
