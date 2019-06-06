<?php
  require_once 'model/TypeLanguageModel.php';
  class TypeLanguageController extends Controller{
        
    function __construct(){ 
      $this->model = new TypeLanguageModel();
    }

    public function getTypesLanguage()
    {
      $listTypeLanguageData = $this->model->getTypesLanguage();
      $typesLanguage = [];
      foreach ($listTypeLanguageData as $language) {
          $typeLanguage = $this->formatDataFromModel($language);
          $typesLanguage[] = $typeLanguage;
      }
      return $typesLanguage;
    }

    public function getTypeLanguageById($id){
      $typeLanguageData = $this->model->getTypesLanguageById($id);
      return $this->formatDataFromModel($typeLanguageData);
    }

    private function formatDataFromModel($type){
      $typeLanguage = new TypeLanguage();
      $type->setId($type["id"]);
      $type->setName($type["name"]);
      return $typeLanguage;
    }   
  }
?>
