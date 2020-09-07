<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
</head>
<body>
    <?php

    
   # echo date("d"); //día
   # echo date("n"); //mes
   # echo date("Y"); //año
    
    ?>
    <form action="add-bill.php" method="GET">
        <label>Fecha: <input type="date" name="inputDate" /></label>
        <label>Tipo: <input type="text" name="inputType" /></label>
        <labe>Numero de Factura: <input type="number" name="inputNumber" /></label>
        <button type="submit">Send</button>
    </form>
</body>
</html>

<?php
    if (isset($_GET['inputDate']))
    $date = $_GET['inputDate'];
    
    # if($date < (date("Y") - date("n") - date("d"))){
        if(isset($_GET['inputType'])){
            $type = $_GET['inputType'];
        }
        if(isset($_GET['inputNumber'])){
            $number = $_GET['inputNumber'];
        }     
    
    # }else{
    #      echo "Fecha incorrecta";
    # }

?>