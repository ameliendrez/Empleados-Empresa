<?php
  class AdministrationView extends View
  {
    function __construct()
    {
      parent::__construct();
    }
    
    function showIndex($company, $typesLanguages, $typesDesign, $typesEmployees)
    {
      $this->smarty->assign('company', $company);
      $this->smarty->assign('typesLanguages', $typesLanguages);
      $this->smarty->assign('typesDesign', $typesDesign);
      $this->smarty->assign('typesEmployees', $typesEmployees);
      $this->smarty->assign('employees', $company->getEmployees());
      return $this->smarty->display('templates/index.tpl');
    }

  }
?>
