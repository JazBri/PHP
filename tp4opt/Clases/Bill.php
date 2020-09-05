<?php
    class Bill{
        //Atributos
        private $date;
        private $type;
        private $number;

        //Constructor
        public function __construct($date, $type, $number){
            $this->date = $date;
            $this->type = $type;
            $this->number = $number;
        }
        
        //Getters y Setters
        public function getDate(){
            return $this->date;
        }

        public function getType(){
            return $this->type;
        }

        public function getNumber(){
            return $this->number;
        }

        public function setDate($date){
            $this->date = $date;
        }

        public function setType($type){
            $this->type = $type;
        }

        public function setNumber($number){
            $this->number = $number;
        }
        
        //Metodos
        public function showDataBill(){
            echo "<br/>Date: " . $this->date;
            echo "<br/>Type: " . $this->type;
            echo "<br/>Number: " . $this->number;
        }    
        
    }
?>