<?php

    namespace Models;   //Hace referencia al namespaces Models

    class Person{
        private $firstName;
        private $lastName;

        public function getFirstName(){
            return $this->firstName;
        }

        public function setFirstName($firstName){
            $this->firstName = $firstName;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function setLastName($lastName){
            $this->lastName = $lastName;
        }

    }


?>