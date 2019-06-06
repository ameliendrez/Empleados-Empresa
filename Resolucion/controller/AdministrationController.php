<?php
  require_once 'view/AdministrationView.php';

  class AdministrationController extends Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->view = new AdministrationView();
      $this->typeLanguageController = new TypeLanguageController();
      $this->typeDesignController = new TypeDesignController();
      $this->typeEmployeeController = new TypeEmployeeController();
      $this->employeeController = new EmployeeController();
      $this->companyController = new CompanyController();
    }

    public function getIndex(){
      $company = $this->companyController->getCompanyById(1);
      $typesLanguages = $this->typeLanguageController->getTypesLanguage();
      $typesDesign = $this->typeDesignController->getTypesDesign();
      $typesEmployees = $this->typeEmployeeController->getTypesEmployee();
      $avg = $this->calculateAvgAgeEmployees($company->getEmployees());
      $this->view->showIndex($company, $typesLanguages, $typesDesign, $typesEmployees, $avg);
    }

    public function getListEmployees($idCompany){
      $employees = $this->employeeController->getEmployeesByCompany($idCompany);
      $avg = $this->calculateAvgAgeEmployees($employees);
      $this->view->showEmployees($employees, $avg, $idCompany);
    }

    public function getEmployeeById(){      
      $employeeId = $_POST["idEmployee"];
      $employee = $this->employeeController->getEmployeeById($employeeId);
      $searchResult = "No se encontró al empleado con el id " . $employeeId;

      if($employee != null && $employee->getId() != null){
        $searchResult = "El empleado con el id " . $employeeId . " es " . $employee->getFullName() . " (" . $employee->getAge() . " años";
        if($employee->getSpeciality() != null){
          $searchResult .= " - " . $employee->getSpeciality()->getName();
        }
        $searchResult .= ")";
      }
      $this->view->showSearchResult($searchResult);
    }

    public function addEmployee()
    {
      $employee = $this->employeeController->addEmployee();
      $idCompany = $_POST["idCompany"];
      $this->companyController->addEmployee($employee->getId(), $idCompany);      
      $this->getListEmployees($idCompany);
    }

    /**
     * Retorna el promedio de edades de los empleados de la empresa
     *
     * @return float
    */
    private function calculateAvgAgeEmployees($employees){
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