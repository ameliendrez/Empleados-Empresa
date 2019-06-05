<?php
    class Designer extends Employee{
        protected $typeDesign;

        function __construct() {  
            parent::__construct();
        }

        public function getTypeDesign()
        {
            return $this->typeDesign;
        }

        public function setTypeDesign($typeDesign)
        {
            $this->typeDesign = $typeDesign;
        }
    }
?>