<?php

    spl_autoload_register(function($className){     //Función anónima que hace una llamada a la librería estandar de php.
        $fileName = $className.".php";              //Recibe el nombre de la clase, concatena el php y hace un requie_once del archivo.
        echo "<br/>" . $fileName;
        require_once($fileName);
        #require_once(__DIR__ .$fileName);
    });

?>