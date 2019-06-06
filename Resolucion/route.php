<?php
  define('ACTION', 0);
  define('PARAMS', 1);

  require_once __DIR__ . '\autoload.php';

  $router = new Router();
  //(url, verb, controller, method)

  // ----------------- ADMINISTRATION CONTROLLER -------------------------// 
  $router->AddRoute("", "GET", "AdministrationController", "getIndex");
  $router->AddRoute("employees", "GET", "AdministrationController", "getEmployees");
  $router->AddRoute("employee/:id", "GET", "AdministrationController", "getEmployee");
  $router->AddRoute("add-employee", "POST", "AdministrationController", "addEmployee");
  $router->AddRoute("avg-age-employee", "POST", "AdministrationController", "getAvgAgeEmployees");

  // ------------- HANDLER ROUTE ------------------//  
  $route = $_GET['action'];

  $array = $router->Route($route);

  if(sizeof($array) == 0) {
    echo "404";
  }
  else
  {
      $controller = $array[0];
      $metodo = $array[1];
      $url_params = $array[2];
      echo (new $controller())->$metodo($url_params);
  }
?>
