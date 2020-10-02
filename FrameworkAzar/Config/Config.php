<?php namespace Config;
//Archivo de configuracion para constantes comunes

//Establece la URL absoluta a la carpeta de nuestro ROOT
define("ROOT", dirname(__DIR__) . "/");

//FRONT_ROOT -> Ruta relativa al directorio root, se cambia en cada proyecto. 
define("FRONT_ROOT", "/TPs LABORATORIO IV/REPOPHP/FrameworkAzar/");

//VIEWS_PATH -> Define como constante la carperta de las vistas
define("VIEWS_PATH", "Views/");
define("CSS_PATH", FRONT_ROOT.VIEWS_PATH . "css/");
define("JS_PATH", FRONT_ROOT.VIEWS_PATH . "js/");
?>




