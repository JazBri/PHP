<?php
    namespace Controllers;

    class HomeController
    {
        public function Index($message = "")
        {
            $studentList = array();
            require_once(VIEWS_PATH."student-add.php");
        }        
    }
?>