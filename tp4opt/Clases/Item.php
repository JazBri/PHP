<?php
    class Item{
        //Atributos
        private $name;
        private $description;
        private $price;
        private $quantity;

        //Constructor
        public function __construct($name, $description, $price, $quantity){
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->quantity = $quantity;
        }
        
        //Getters y Setters
        public function getName(){
            return $this->name;
        }

        public function getDescription(){
            return $this->description;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getQuantity(){
            return $this->quantity;
        }

        public function setName($name){
            $this->name = $name;
        }
        
        public function setDescription($description){
            $this->description = $description;
        }
        
        public function setprice($price){
            $this->price = $price;
        }
        
        public function setQuantity($quantity){
            $this->quantity = $quantity;
        }
        //Metodos
        public function showDataBill(){
            echo "<br/>Name: " . $this->name;
            echo "<br/>Description: " . $this->description;
            echo "<br/>Price: " . $this->price;
            echo "<br/>Quantity: " . $this->quantity;
        }    
        
    }
?>