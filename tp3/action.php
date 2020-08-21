<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 3</title>
</head>

<body>
    
        <?php

            echo "</br> 1. a. ";
            $myNumber = 123; 
            $numberString = "123";
            echo $myNumber + $numberString;
            
            echo "</br> 1. b. ";
            echo $numberString + $myNumber;
            
            echo "</br> 1. c. ";
            echo $myNumber.$numberString;

            echo "<hr/>";
          
            echo "</br> 2. a. ";
            if(1 == "1"){
                echo "It's right";
            }

            echo "</br> 2. b. ";
            if(1 === "1"){
                echo "It's right";
            }

            echo "</br> 2. c. ";
            if(!null){
                echo "It's right";
            }

            echo "</br> 2. d. ";
            if(!false){
                echo "It's right";
            }

            echo "</br> 2. e. ";
            if(""){
                echo "It's right";
            }

            echo "</br> 2. f. ";
            if(" "){
                echo "It's right";
            }

            echo "</br> 2. g. ";
            if("tested"){
                echo "It's right";
            }
            
            echo "</br> 2. h. ";
            if(1-1){
                echo "It's right";
            }

            echo "<hr/>";
            echo "</br> 3. ";

            function multiplication ($multiplicando, $multiplicador){
                return $multiplicador * $multiplicando;
            }

            function division ($dividendo, $divisor){
                if($divisor > 0){
                    return $dividendo / $divisor;
                }else{
                    echo "Not a number";
                }
            }


            echo "</br>";
            echo multiplication(3, 4);
            echo "</br>";
            echo division(25, 5);
            echo "</br>";
            echo division(25, 0);
        
            echo "<hr/>";

            echo "</br> 4. ";

            $array = [  
                1     => "first value",
                "1"  => "second value",    
                1.2  => "tirth value",    
                true => "fourth value",    
                1+0.2 => "fifth value",    
                false !== null => "sixth value", 
            ];

            foreach($array as $key => $value){
                echo "Clave: $key - Value: $value <br/>";
            }

            var_dump($array);
            var_dump(count($array));

            echo "<hr/>";

            echo "</br> 5. ";

            $people = [ 
                ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
                ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
                ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
                ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
                ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
                ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
                ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
      ];

            echo "</br> 5.a ";
            echo "<pre>";
            print_r($people);
            echo "</pre>";

            echo "<hr/>";
            echo "</br> 6 ";

            if((date("D") == "Sat") || (date("D") == "Sun")){
                echo "Es fin de semana";    
            }else{

                echo "El día de la semaña es: " . date("l");
            }
            echo "<hr/>";
            echo "</br>";
        ?>
        
        <form action="action.php" method="GET"> <!--El method GET no oculta la información, se ve en la URL, a diferencia del POST-->
            <input type ="text" id="product" name = "product" placeholder="Introduzca el producto"        />
            <input type ="number" id="price" name = "price" placeholder="Introduzca el valor"        />
            <button type ="submit" >Enviar </button>
            
        </form>

        <?php
       
            echo "</br> 7 ";
            if (isset($_GET)){
                $total_sale = $_GET['product'];
                $type_sale = $_GET['price'];
                echo $total_sale;
                echo $type_sale;
            }else{
                echo "No se encontró ningún dato";
            }

            if($total_sale < 200){
                if($type_sale === "mascotas"){
                    echo "No se puede realizar el envío";
                }else if ($type_sale == "ropa"){
                    echo "Los gastos de envío son de 80 pesos";
                }   
            }else{
                echo "Producto inválido";
            }  
            if($total_sale >= 200 && $total_sale <= 600){
                echo "Los gastos de envío son de 80 pesos";
            }
            if($total_sale > 600){
                echo "Los gastos de envío son gratis";
            }
            if($total_sale > 2000){
                echo "Código de descuento: CODEDESC33";
            }

            echo "<hr/>";
            echo "</br> 8 ";
            
        ?>

           
        <form action="action.php" method="POST"> <!--El method GET no oculta la información, se ve en la URL, a diferencia del POST-->
            <input type ="number" min="0" id="n1" name = "n1" placeholder="Numero1"        />
            <input type ="number" min="0" id="n2" name = "n2" placeholder="Numero2"        />
            <input type ="number" min="0" id="n3" name = "n3" placeholder="Numero3"        />
            <input type ="number" min="0" id="n4" name = "n4" placeholder="Numero4"        />
            <button type ="submit" >Enviar </button>
        </form>
          
        <?php

            $a = 0;
            $b = 0;
            $c = 0;
            $d = 0;
            if(isset($_POST)){
                $a = $_POST['num1'];
                $b = $_POST['num2'];
                $c = $_POST['num3'];
                $d = $_POST['num4'];
                echo $a;
                echo $b;
                echo $c;
                echo $d;
            }else{
                echo "No se encontró ningún dato";
            }

            if($a > $b || $a > $c || $a > $d){
                $mayor = $a;
            }else{
                if($b > $a || $b > $c || $b > $d){
                    $mayor = $b;
                }else{
                    if($c > $a || $c > $b || $c > $d){
                        $mayor = $c;
                    }else{
                        $mayor = $d;
                    }
                }
            }
            echo "<hr/>";
            echo "</br> 9 ";
        ?>


  
        <form action="tabla.php" method="POST"> <!--El method GET no oculta la información, se ve en la URL, a diferencia del POST-->
            <input type ="text"  id="name" name = "name" placeholder="Name"/>
            <input type ="text"  id="age" name = "age" placeholder="Sex"/>
            <input type ="text"  id="sex" name = "sex" placeholder="Age"/>
            <button type ="submit" >Enviar </button>
        </form>




</body>

</html>