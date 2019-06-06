<?php
  require_once 'model/EmployeeModel.php';
  class EmployeeController extends Controller{
    const DEVELOPER = "Developer";
    const DESIGNER = "Designer";
        
    function __construct(){ 
      $this->model = new EmployeeModel();
      $this->typeLanguageController = new TypeLanguageController();
      $this->typeDesignController = new TypeDesignController();
      $this->typeEmployeeController = new TypeEmployeeController();
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

    public function getEmployeeById($id)
    {
      $employeeData = $this->model->getEmployeeById($id);
      $employee = $this->formatDataFromModel($employeeData);
      return $employee;
    }

    public function addEmployee()
    {
      $employee = $this->formatDataFromForm();
      $idEmployee = $this->model->saveEmployee($employee);
      $employee->setId($idEmployee);
      return $employee;
    }

    private function formatDataFromModel($employeeData){
      $typeEmployee = $this->typeEmployeeController->getTypeEmployeeById($employeeData["type_employee"]);
      $employee = new Employee();

      if($typeEmployee->getName() == self::DEVELOPER){
        $employee = $this->getDeveloper($employeeData);
      }
      else if($typeEmployee->getName() == self::DESIGNER){
        $employee = $this->getDesigner($employeeData);
      }

      $employee->setTypeEmployee($typeEmployee);
      $employee->setId($employeeData["id"]);
      $employee->setName($employeeData["name"]);
      $employee->setLastName($employeeData["last_name"]);
      $employee->setAge($employeeData["age"]);
      
      return $employee;
    } 

    private function formatDataFromForm()
    {
      $typeEmployee = $this->typeEmployeeController->getTypeEmployeeById($_POST["typeEmployee"]);
      $employee = new Employee();
      if($typeEmployee->getName() == self::DEVELOPER){
        $employee = new Developer();
        $typeLanguage = $this->typeLanguageController->getTypeLanguageById($_POST["typeLanguage"]);
        $employee->setSpeciality($typeLanguage);
      }
      else if($typeEmployee->getName() == self::DESIGNER){
        $employee = new Designer();
        $typeDesign = $this->typeDesignController->getTypeDesignById($_POST["typeDesign"]);
        $employee->setSpeciality($typeDesign);
      }
      $employee->setName($_POST["name"]);
      $employee->setLastName($_POST["lastName"]);
      $employee->setAge($_POST["age"]);
      $employee->setTypeEmployee($typeEmployee);

      return $employee;
    }
    
    private function getDeveloper($developerData){
      $employee = new Developer();
      $typeLanguage = $this->typeLanguageController->getTypeLanguageById($developerData["type_language"]);
      $employee->setSpeciality($typeLanguage);
      return $employee;
    }

    private function getDesigner($developerData){
      $employee = new Designer();
      $typeDesign = $this->typeDesignController->getTypeDesignById($developerData["type_design"]);
      $employee->setSpeciality($typeDesign);
      return $employee;
    }

  }
?>
