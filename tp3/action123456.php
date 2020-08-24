
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