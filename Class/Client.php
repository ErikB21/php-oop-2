<?php

    require_once __DIR__ . '/Users.php';


    class Client extends Users{

        public $budget;

        public function __construct($name, $lastname, $age = null, $budget)
        {
            parent::__construct($name, $lastname, $age);
            $this->budget = $budget;
            
        }
    
    }

























?>