<?php
  require_once 'model/TypeEmployeeModel.php';
  class TypeEmployeeController extends Controller{
        
    function __construct(){ 
      $this->model = new TypeEmployeeModel();
    }

    public function getTypesEmployee()
    {
      $listTypeEmployeeData = $this->model->getTypesEmployee();
      $typesEmployee = [];
      foreach ($listTypeEmployeeData as $employee) {
          $typeEmployee = $this->formatDataFromModel($employee);
          $typesEmployee[] = $typeEmployee;
      }

      return $typesEmployee;
    }

    public function getTypeEmployeeById($id){
      $typeEmployeeData = $this->model->getTypesEmployeeById($id);
      return $this->formatDataFromModel($typeEmployeeData);
    }

    private function formatDataFromModel($employeeData){
      $typeEmployee = new TypeEmployee();
      $typeEmployee->setId($employeeData["id"]);
      $typeEmployee->setName($employeeData["name"]);
      return $typeEmployee;
    }   
  }
?>
