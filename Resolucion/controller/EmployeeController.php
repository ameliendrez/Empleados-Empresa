<?php
  require_once 'model/EmployeeModel.php';
  class EmployeeController extends Controller{
    const DEVELOPER = "Developer";
    const DESIGNER = "Designer";
        
    function __construct(){ 
        $this->model = new EmployeeModel();
    }

    public function getEmployeesByCompany($id)
    {
      $listEmployeeData = $this->model->getEmployeeByCompanyId($id);
      $employees = [];
      foreach ($listEmployeeData as $employeeData) {
          $employee = $this->formatDataFromModel($employeeData);
          $employees[] = $employee;
      }
      return $employees;
    }

    private function formatDataFromModel($employeeData){
      $typeEmployee = $this->typeEmployeeController->getTypeEmployeeById($employeeData["type_employee"]);
      $employee = new Employee();

      if($typeEmployee == self::DEVELOPER){
        $employee = $this->getDeveloper($employeeData);
      }
      else if($typeEmployee == self::DESIGNER){
        $employee = $this->getDesigner($employeeData);
      }

      $employee->setTypeEmployee($typeEmployee);
      $employee->setId($employeeData["id"]);
      $employee->setName($employeeData["name"]);
      $employee->setLastName($employeeData["last_name"]);
      $employee->setAge($employeeData["age"]);
      
      return $employee;
    } 
    
    private function getDeveloper($developerData){
      $employee = new Developer();
      $typeLanguage = $this->typeLanguageController->getTypeLanguageById($developerData["type_language"]);
      $employee->setTypeLanguage($typeLanguage);
      return $employee;
    }

    private function getDesigner($developerData){
      $employee = new Designer();
      $typeDesign = $this->typeDesignController->getTypeLanguageById($developerData["type_designer"]);
      $employee->setTypeDesign($typeDesign);
      return $employee;
    }

  }
?>
