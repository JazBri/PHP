<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <strong>Arrays predefinidos </strong></br>
    <?php
        //Arrays predefinidos
        
        $array1 = array("elemento1", "elemento2", "elemento3");
        echo $array1[0];
        echo "</br>";
        print_r($array1);
        echo "</br>";
        echo "<hr/>";
        
        ?>
          <strong>Arrays asociativos o personalizados </strong></br>
        <?php
        
            //Arrays asociativos o personalizados
            echo "Array asociativos o personalizados </br>";
            $array2 = array("clave1" => "elemento1", "clave2" => "elemento2", "clave3" => "elemento3");
            echo  $array2["clave1"];
            echo  $array2["clave2"];
            var_dump($array2);
            echo "</br>";
            echo "<hr/>";
        ?>
    
            <strong>explode</strong><br/>
        <?php


        $name = 'juan,maria,pepe,andrea,jorgelina,cecilia';
        echo $name;
        
        //Devuelve un array de string, siendo cada uno un substring del parámetro string formado por la división de comas.
        $arrayNames = explode(',',$name);
    
        echo "</br>";
        
        print_r($arrayNames);
        
        echo "</br>";
        
        foreach ($arrayNames as $value) {
            echo $value . '<br>';
        }

        echo "</br>";
        echo "<hr/>";

        ?>    
            <strong>sort</strong><br/>
        <?php
            sort($arrayNames);
            print_r($arrayNames);
            echo "</br>";
            echo "<hr/>";
    
        ?>    
            <strong>ucfirst</strong><br/>
        <?php
            $newArray = array();
            
            foreach($arrayNames as $value){
                $new = ucfirst($value);
                array_push($newArray, $new);
            }
            print_r($newArray);
            echo "</br>";
            echo "<hr/>";
    
        ?>    
            <strong>count</strong><br/>
        <?php
            var_dump(count($newArray));

            echo "</br>";
            echo "<hr/>";
    
        ?>    
            <strong>array combine</strong><br/>
        <?php

            $keys = array(1, 2, 3, 4, 5, 6);
            var_dump($keys);
            var_dump(count($newArray));
            //Combina dos arrays, el primero pasa a ser la key del valor del segundo.
            $arrayAssosiative = array_combine($keys, $newArray);
            echo "</br>";
            var_dump($arrayAssosiative);
            echo "</br>";
            echo "<pre>";
                print_r($arrayAssosiative);
            echo "<pre>";

            print_r(count($arrayAssosiative));
            echo "</br>";
            echo "<hr/>";
    
        ?>    
            
        <?php
            function exist ($toSearch, $array){
                $flag = false;
                if(in_array($toSearch, $array)){
                    $flag = true;
                }
                return $flag;
            }

            $flag = exist("maria", $arrayAssosiative);
            
            if($flag == false){
                echo "No se encuentra";
            }else{
                echo "Si se encuentra";
            }
            $flag = exist("Andrea", $arrayAssosiative);
            if($flag == false){
                echo "No se encuentra";
            }else{
                echo "Si se encuentra";
            }
            
            echo "</br>";
            echo "<hr/>";

            function keyExist ($keySearch, $array){
                $flag = false;
                if(array_key_exists($keySearch, $array)){
                    $flag = true;
                }
                return $flag;
            }
            $flag = keyExist(50, $arrayAssosiative);
            
            if($flag == false){
                echo "No se encuentra";
            }else{
                echo "Si se encuentra";
            }
            $flag = keyExist(1, $arrayAssosiative);
            if($flag == false){
                echo "No se encuentra";
            }else{
                echo "Si se encuentra";
            }

            echo "</br>";
            echo "<hr/>";
            ?>    
                <strong>implode</strong><br/>
            <?php
            echo "<pre>";
                print_r($arrayAssosiative);
            echo "<pre>";
            
            function keysReturn($array){
                $keys = array_keys($array);
                $implodeNew = implode(",", $keys);
                return $implodeNew;
            }
            
            $keysArray = keysReturn($arrayAssosiative);
            echo $keysArray;
            

        ?>
</body>
</html>