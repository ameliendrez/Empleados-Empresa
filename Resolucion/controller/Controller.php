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

    function __construct()
    {
      
    }
  }

?>
