<?php
    class Designer extends Employee{
        function __construct() {  
            parent::__construct();
        }

        public function getSpecility()
        {
            return $this->speciality;
        }

        public function setSpeciality($typeDesign)
        {
            $this->speciality = $typeDesign;
        }
    }
?>