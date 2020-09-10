<?php
    
    spl_autoload_register(function($className){
        
        echo "<br><br>Lo que llega: ".$className;
        
        $root = dirname(__DIR__)."/";
        $class = str_replace('\\','/',$className);
        
        echo "<br>Ruta modificada: ".$class;
        
        $fileName = $root.$class.".php";  
        
        echo "<br>Ruta final:".$fileName;
        
        include_once($fileName); 
        
        echo "<br>";
    })

?>