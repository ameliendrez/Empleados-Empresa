<?php
  class AdministrationView extends View
  {
    function __construct()
    {
      parent::__construct();
    }
    
    function showIndex($company, $typesLanguages, $typesDesign, $typesEmployees, $avg)
    {
      $searchResult = "No se han realizado búsquedas";
      $this->smarty->assign('company', $company);
      $this->smarty->assign('typesLanguages', $typesLanguages);
      $this->smarty->assign('typesDesign', $typesDesign);
      $this->smarty->assign('typesEmployees', $typesEmployees);
      $this->smarty->assign('avg', $avg);
      $this->smarty->assign('employees', $company->getEmployees());
      $this->smarty->assign('idCompany', $company->getId());
      $this->smarty->assign('searchResult', $searchResult);
      return $this->smarty->display('templates/index.tpl');
    }

    public function showEmployees($employees, $avg, $idCompany)
    {
      $this->smarty->assign('avg', $avg);
      $this->smarty->assign('employees', $employees);
      $this->smarty->assign('idCompany', $idCompany);
      return $this->smarty->display('templates/employees.tpl');
    }

    public function showSearchResult($searchResult)
    {
      $this->smarty->assign('searchResult', $searchResult);
      return $this->smarty->display('templates/searchResult.tpl');
    }

  }
?>
