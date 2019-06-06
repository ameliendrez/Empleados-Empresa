<?php
  require_once 'model/CompanyModel.php';
  class CompanyController extends Controller{
        
    function __construct(){ 
      $this->model = new CompanyModel();
      $this->employeeController = new EmployeeController();
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

    public function addEmployee($idEmployee, $idCompany)
    {
      $this->model->addEmployee($idEmployee, $idCompany);
    }

  }
?>
