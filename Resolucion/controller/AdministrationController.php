<?php
  require_once 'view/AdministrationView.php';

  class AdministrationController extends Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->view = new AdministrationView();
    }

    public function getIndex(){
        $company = $this->companyController->getCompanyById(1);
        $typesLanguages = $this->typeLanguageController->getTypesLanguages();
        $typesDesign = $this->typeDesignController->getTypesDesign();
        $typesEmployees = $this->typeEmployeeController->getTypesEmployee();
        $this->view->showIndex($company, $typesLanguages, $typesDesign, $typesEmployees);
    }



  }
?>