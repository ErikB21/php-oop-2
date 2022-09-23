<?php

    require_once __DIR__ . '/Users.php';

    class Agent extends Users{
        
        
        protected $worksEmail;

        public function setWorkEmail($worksEmail){

            if(strpos($worksEmail, '@') !==false && strpos($worksEmail, '.') !== false){
                return $this->worksEmail = '<strong class="eb_color">Email del lavoro: </strong>' . $worksEmail;
            }else{
                return $this->worksEmail = null;
            }
        }

        public function getWorkEmail(){
            return $this->worksEmail;
        }



    }