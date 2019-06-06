<?php
  require_once 'model/CompanyModel.php';
  class CompanyController extends Controller{
        
    function __construct(){ 
        $this->model = new CompanyModel();
    }

    public function getCompanyById($id){
      $companyData = $this->model->getCompanyById($id);
      return $this->formatDataFromModel($companyData);
    }

    private function formatDataFromModel($companyData){
      $company = new Company();
      $company->setId($companyData["id"]);
      $company->setName($companyData["name"]);

      $employees = $this->employeeController->getEmployeesByCompany($company->getId());
      $company->setEmployees($employees);
      
      return $company;
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
  }
?>
