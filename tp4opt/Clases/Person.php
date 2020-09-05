<?php
    //Clase abstracta
   abstract class Person{
    //Atributos de la clase.
        private $id;
        private $firstName;
        private $lastName;
        private $dni;
        private $email;

        //Constructor
        public function __construct($firstName, $lastName, $dni, $email){
            $this->firstName = $firstName;
            $this->lastName = $lastName;    
            $this->dni = $dni;
            $this->email = $email;
        }

        //Getters y Setters
        public function getId(){
            return $this->id;
        }

        public function getFirstName(){
            return $this->firstName;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function getDni(){
            return $this->dni;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setFirstName($firstName){
            $this->firstName = $firstName;
        }

        public function setLastName($lastName){
            $this->lastName = $lastName;
        }

        public function setDni($dni){
            $this->dni = $dni;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        //Metodos
        public function showData(){
            echo "<br/>First Name: " . $this->firstName;
            echo "<br/>Last Name: " . $this->lastName;
            echo "<br/>DNI: " . $this->dni;
            echo "<br/>Email: " . $this->email;
        }
    }


?>