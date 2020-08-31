<?php
    /*
    require_once("Models/Person.php");
    require_once("Models/Student.php");
            Esto se puede volver muy engorroso al tener mucha herencia o interfaces,
            por lo tanto haremos -> require_once("Config/Autoload.php");
    */

    require_once("Config/Autoload.php");

    use Models\Person as Person;
    use Models\Student as Student;
    
    $student = new Student();

    $student->setFirstName("Jaz");
    $student->setLastName("Bri");
    $student->setRecordId(123456);

    var_dump($student);
    
    $person = new Person();
    var_dump($person);


?>