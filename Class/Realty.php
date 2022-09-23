<?php

    require_once __DIR__ . '/../trait/Address.php';
        

    class Realty{
        
        use Address;
        public $name;
        public $rooms;
        public $squareMeters;
        public $year;
        protected $rent = null;
        protected $sale = null;

        public function __construct($name, $rooms, $squareMeters, $year)
        {   
            $this->name = $name;
            $this->rooms = $rooms;
            $this->squareMeters = $squareMeters;
            $this->year = $year;
        }

        public function setRent($val){
            if(is_int($val) && $val >= 200 && $val <= 600){
                return $this->rent = '<strong class="eb_color">Ottimo Prezzo! Costo effettivo affitto: </strong>' . $val;
            }else if(is_int($val) && $val > 600){
                return $this->rent = '<strong class="eb_color">Un\' po caro! Costo effettivo affitto: </strong>' . $val;
            }else{
                return $this->rent = null;
            }
        }

        public function getRent(){
            return $this->rent;
        }

        public function setSale($val){
            if(is_int($val) && $val >= 20000 && $val <= 500000){
                return $this->sale = '<strong class="eb_color">Ottimo Prezzo! Valutazione: </strong>' . $val;
            }else if (is_int($val) && $val > 500000 && $val <= 800000){
                return $this->sale = '******';
            }
        }

        public function getSale(){
            return $this->sale;
        }

    }






















?>