<?php
            include_once 'Person.php';
    class Client extends Person{
        //Atributos
        private $userName;
        private $password;

        //Constructor
        public function __construct($firstName, $lastName, $userName, $password){
            $this->setFirstName($firstName);
            $this->setLastName($lastName);
            $this->userName = $userName;
            $this->password = $password;
        }
        

        //Getters y Setters
        public function getUserName(){
            return $this->userName;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setUserName($userName){
            $this->userName = $userName;
        }
        
        public function setPassword($password){
            $this->password = $password;
        }

        //Metodos
        public function showDataClient(){
            $this->showData();  //Muestra el showData de la clase padre.
            echo "<br/>User Name: " . $this->userName;
            echo "<br/>Password: " . $this->password;
        }

        public static function sayHi(){
            echo "<br/> This is a static method called with colon, Thank you";
        }

    }
?>