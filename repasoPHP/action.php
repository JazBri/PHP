<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Document</title>
</head>
<body>
    <h1>Sintaxis básica</h1>
    <?php

        $text = " Hello World";
        $name = " Jaz";
    
        echo $text;
        echo "<br/>";
        echo $name;
        echo "<br/>";
        echo $text  . $name;
    
        $text2 = 'Hi' . $name ;
        $text3 = "Hi $name";
        echo "<br/>";
        echo $text2;
        echo "<br/>";
        echo $text3;

        //No guarda el tipo de dato, por lo cual se puede reemplazar por cualquier valor.
        $text3 = 234;
        echo $text3;
        
        function testFunction(){
            echo "<br/>Im in a function";
        }
        
    ?>
    <hr/>
    
    <?php

        echo "More PHP";
        testFunction();
        echo "<hr/>";

        //Se declara la variable de tipo array de cualquiera de estas dos maneras.
        $array = array();
        $array = [];
    
        //Ya no es un arreglo, ahora es un texto
        $array = $text2;
        echo  $array;
        
        echo "<hr/>";
        $array = array();
        $array[] = "Primer elemento";
        //Dentro del corchete va la clave
        $array['texto'] = "Segundo elemento";
        $array[] = "Tercer  elemento";
        $array[$text2] = "Cuarto elemento";
        $array[] = "Quinto elemento";
        $num = 7;
        $array[$num] = "Sexto elemento";
        $array[8+1-2] = "Septimo elemento";

        //Etiquetas de preformateo, muestra el arreglo con su formato.
        echo "<pre>";

        var_dump($array);   //Muestra el tipo de dato, es más completo.
        print_r($array);

        echo "</pre>";
        
        echo "<hr/>";
        foreach($array as $key => $value){
            echo "Clave: $key - Value: $value <br/>";
        }
 

    ?>
    
</body>
</html>
