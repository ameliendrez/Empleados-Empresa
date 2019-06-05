<?php

  class CompanyController {
    
    private $company;
    
    function __construct(){ 
        $this->company = new Company();
        $this->company->setId(1);
        $this->company->setName("Summa Solutions");
    }

    /**
     * Retorna un objeto del tipo Company
     *
     * @return Company
     */
    public function getCompany(){
      return $this->company;
    }

    /**
     * Agrega un empleado a la lista de empleados que posee la compania
     *
     * @param [type] $id
     * @param [type] $name
     * @param [type] $lastName
     * @param [type] $age
     * @param [type] $typeEmployee
     * @param [type] $specialty
     * @return void
     */
    public function addEmployee($id, $name, $lastName, $age, $typeEmployee=null, $specialty=null){
      $newEmployee = $this->getTypeEmployee($typeEmployee, $specialty);
      $newEmployee->setId($id);
      $newEmployee->setName($name);
      $newEmployee->setLastName($lastName);
      $newEmployee->setAge($age);

      $this->company->addEmployee($newEmployee);
    }

    /**
     * Retorna un array de objetos de tipo Employee
     *
     * @return Employee[]
     */
    public function getListEmployeed(){
      $employees = $this->company->getEmployees();
      return $employees;
    }

    /**
     * Se obtiene un objeto del tipo Employee
     *
     * @param [type] $id
     * @return Employee
     */
    public function getEmployeeById($id){
      $employees = $this->company->getEmployees();
      foreach ($employees as $employee) {
        if($employee->getId() == $id){
          return $employee;
        }
      }
      return null;
    }

    /**
     * Retorna el promedio de edades de los empleados de la empresa
     *
     * @return float
     */
    public function getAvgAgeEmployee(){
      $employees = $this->company->getEmployees();
      $countEmployee = count($employees);
      if ($countEmployee > 0){
        $total = 0;
        foreach ($employees as $employee) {
          $total += $employee->getAge();
        }
        return $total/count($employees);
      }
      return 0;
    }

    /**
     * Retorna un objeto del tipo Employee
     * El tipo de empleado puede ser diseñador o desarrollador
     *
     * @param [type] $typeEmployee
     * @param [type] $specialty
     * @return Employee
     */
    private function getTypeEmployee($typeEmployee=null, $specialty=null){
      $employee = new Employee();

        if($typeEmployee !=null && $typeEmployee == TypeEmployee::DESIGNER){
          $employee = new Designer();
          if($specialty != null){
            $employee = $this->createDesignerSpeciality($employee, $specialty);
          }
        }
        else if($typeEmployee !=null && $typeEmployee == TypeEmployee::DEVELOPER){
          $employee = new Developer();
          if($specialty != null){
            $employee = $this->createDeveloperSpeciality($employee, $specialty);
          }
        }

      return $employee;
    }

    /**
     * Retorna un objeto del tipo Developer, el cual extiende de Employee
     * También setea el valor del tipo de lenguaje que programa el desarrollador (PHP, NET o Phyton)
     *
     * @param [type] $developer
     * @param [type] $speciality
     * @return Developer
     */
    private function createDeveloperSpeciality($developer, $speciality)
    {
      if($speciality == TypeLanguages::PHP){
        $developer->setTypeLanguage(TypeLanguages::PHP);
      } 
      else if($speciality == TypeLanguages::NET){
        $developer->setTypeLanguage(TypeLanguages::NET);
      } 
      else if($speciality == TypeLanguages::PHYTON){
        $developer->setTypeLanguage(TypeLanguages::PHYTON);
      } 
      return $developer;
    }

    /**
     * Retorna un objeto del tipo Designer, el cual extiende de Employee
     * También setea el valor del tipo de diseñador (web o gráfico)
     *
     * @param [type] $developer
     * @param [type] $speciality
     * @return Designer
     */
    private function createDesignerSpeciality($designer, $speciality)
    {
      if($speciality == TypeDesign::GRAPHIC){
        $designer->setTypeDesign(TypeDesign::GRAPHIC);
      } 
      else if($speciality == TypeDesign::WEB){
        $designer->setTypeDesign(TypeDesign::WEB);
      } 
      return $designer;
    }


  }
?>
