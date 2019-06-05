<?php
    class Developer extends Employee{
        protected $typeLanguage;

        function __construct() {  
            parent::__construct();
        }

        public function getTypeLanguage()
        {
            return $this->typeLanguage;
        }

        public function setTypeLanguage($typeLanguage)
        {
            $this->typeLanguage = $typeLanguage;
        }
    }
?>