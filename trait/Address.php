<?php

    trait Address{
        protected $address;

        public function setAddress($val){
            $this->address = $val;
        }

        public function getAddress(){
            return $this->address;
        }
    }
