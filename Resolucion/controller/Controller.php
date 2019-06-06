<?php
  define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

  require_once __DIR__ . '\TypeLanguageController.php';
  require_once __DIR__ . '\TypeDesignController.php';
  require_once __DIR__ . '\TypeEmployeeController.php';
  require_once __DIR__ . '\EmployeeController.php';
  require_once __DIR__ . '\CompanyController.php';

  class Controller
  {
    protected $view;
    protected $model;

    protected $typeLanguageController;
    protected $typeDesignController;
    protected $typeEmployeeController;
    protected $employeeController;
    protected $companyController;

    function __construct()
    {
      $this->typeLanguageController = new TypeLanguageController();
      $this->typeDesignController = new TypeDesignController();
      $this->typeEmployeeController = new TypeEmployeeController();
      $this->employeeController = new EmployeeController();
      $this->companyController = new CompanyController();
    }
  }

?>
