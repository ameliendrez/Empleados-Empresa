<?php
    class Employee {
        protected $id;
        protected $name;
        protected $lastName;
        protected $age;
        protected $typeEmployee;
        protected $speciality;

        function __construct() {  
            $this->typeEmployee = null;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function setLastName($lastName){
            $this->lastName = $lastName;
        }

        public function getAge(){
            return $this->age;
        }

        public function setAge($age){
            $this->age = $age;
        }

        public function getTypeEmployee()
        {
            return $this->typeEmployee;
        }

        public function setTypeEmployee($typeEmployee)
        {
            $this->typeEmployee = $typeEmployee;
        }

        public function getFullName(){
            return $this->getLastName() . " " . $this->getName();
        }

        public function getSpeciality()
        {
            return $this->speciality;
        }

        public function setSpeciality($speciality)
        {
            $this->speciality = $speciality;
        }
    }
?>