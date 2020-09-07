<?php
    namespace Models;       #Pertenece al namespace de Models

    use Models\Person as Person;        #Ya que Student extiende de Person hay que hacer un use

    class Student extends Person{
        private $recordId;

        public function getRecordId(){
            return $this->recordId;
        }

        public function setRecordId($recordId){
            $this->recordId = $recordId;
        }
    }


?>