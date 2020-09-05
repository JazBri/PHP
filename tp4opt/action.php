<?php
    require_once 'Clases/Client.php';
    require_once 'Vistas/add-bill.php';
/*

    #require_once 'Person.php';
    require_once 'Clases/Client.php';
    require_once 'Clases/Bill.php';
    #$person1 = new Person("Jaz", "Bri", 123456789, "jaz@mail.com"); 
    #var_dump($person1);
    
    $client1 = new Client("Jazmin","Briasco", "User", "1234");
    $client1->setUserName("Jaz");
    $client1->setDni("223344");
    $client1->setEmail("jaz@mail.com");
    
    #echo($client1->getUserName());
    #echo($client1->getPassword());
    #echo($client1->getFirstName());
    
    $client1->showDataClient();
    Client::sayHi();

*/  


if (isset($_POST['inputUserName']))
    $name = $_POST['inputUserName'];
if (isset($_POST['inputPassword'])){
    $pass = $_POST['inputPassword'];
    if((strlen($pass)) < 7){           //Por poner alguna condición
        header("Location: http://localhost/tp4/index.html");
    }else{
        $client1 = new Client("Jazmin","Briasco", "User", "1234");  //Datos hardcodeados, debería llenar primero un formulario con sus datos, guardarlos y después logearse.
        $client1->setUserName($name);
        $client1->setPassword($pass);
        $client1->setDni("223344");
        $client1->setEmail("jaz@mail.com");
        header("Location: http://localhost/tp4/Vistas/add-bill.php");
    }
}



    #$client1->showDataClient();

    

?>