
<?php
    require_once("Config/Autoload.php");

    use Models\User as User;

    session_start();
    
    if(isset($_SESSION["loggedUser"])){
        $loggedUser = $_SESSION["loggedUser"];
        $secondUser = $_SESSION["secondUser"];
    }else{
        header("location:index.php");
    }
?>
<html>
    <head>
        <title>Session</title>
    </head>
    <body>
        <span>Bienvenido!! <?php echo $loggedUser->getEmail() ?></span>
        <span>Bienvenido!! <?php echo $secondUser->getEmail() ?></span>
        <br>
        <span>Bienvenido!! <?php print_r($_SESSION)  ?></span>
        <!--Al ser un array asociativo lo que hace es en la misma session guardar los dos valores, no son sesiones diferentes
        sino que en el mismo arreglo guarda los dos valores, si bien se puede acceder a ambos no es así como se debe manejar.
        Un usuario, un arreglo.
        La persistencia (hasta que se cierra el navegador o se destruye con session_destroy()) del usuario loggeado es uno.  
        -->
        <br>
        <a href="logout.php">Cerrar Sesión</a>
    </body>
</html>