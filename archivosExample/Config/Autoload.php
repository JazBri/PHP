
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
        #Función anónima que hace una llamada a la librería estandar de php.
        #Recibe el nombre de la clase, concatena el php y hace un requie_once del archivo.
?>