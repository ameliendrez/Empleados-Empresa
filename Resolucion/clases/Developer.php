<?php
    class Developer extends Employee{
        function __construct() {  
            parent::__construct();
        }

        public function getSpeciality()
        {
            return $this->speciality;
        }

        public function setSpeciality($typeLanguage)
        {
            $this->speciality = $typeLanguage;
        }
    }
?>