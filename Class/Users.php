<?php

    require_once __DIR__ . '/../trait/Address.php';

    class Users{

        use Address;
        public $name;
        public $lastname;
        protected $age;
        
        public function __construct($name, $lastname, $age = null)
        {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->age = $age;
        }

        public function setAge($age){
            if(is_int($age) && $age >= 18 && $age < 99){
                $this->age = $age;
            } else{
                // throw new Exception('Formato età non valido!');
                echo 'Età non valida';
            }
        }

        public function getAge(){
            return $this->age;
        }
    }





















?>