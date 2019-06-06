<?php
  require_once 'model/TypeDesignModel.php';
  class TypeDesignController extends Controller{
        
    function __construct(){ 
      $this->model = new TypeDesignModel();
    }

    public function getTypesDesign()
    {
      $listTypeDesignData = $this->model->getTypesDesign();
      $typesDesign = [];
      foreach ($listTypeDesignData as $designer) {
          $typeDesign = $this->formatDataFromModel($designer);
          $typesDesign[] = $typeDesign;
      }

      return $typesDesign;
    }

    public function getTypeDesignById($id){
      $typeDesignData = $this->model->getTypeDesignById($id);
      return $this->formatDataFromModel($typeDesignData);
    }

    private function formatDataFromModel($designerData){
      $typeDesign = new TypeDesign();
      $typeDesign->setId($designerData["id"]);
      $typeDesign->setName($designerData["name"]);
      return $typeDesign;
    }   
  }
?>
