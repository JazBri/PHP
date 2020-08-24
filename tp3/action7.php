<?php

    echo "</br> 7 ";
    if (isset($_GET)){
        $total_sale = $_GET['price'];
        $type_sale = $_GET['product'];
        echo "VALORES: </br>";
        echo $total_sale;
        echo "</br>";
        echo $type_sale;
        echo "</br>";
    }else{
        echo "No se encontró ningún dato";
    }

    if($total_sale < 200){
        if($type_sale === "mascotas"){
            echo "No se puede realizar el envío </br>";
        }else if ($type_sale == "ropa"){
            echo "Los gastos de envío son de 80 pesos </br>";
        }   
    }
    if($total_sale >= 200 && $total_sale <= 600){
        echo "Los gastos de envío son de 80 pesos </br>";
    }
    if($total_sale > 600){
        echo "Los gastos de envío son gratis </br>";
    }
    if($total_sale > 2000){
        echo "Código de descuento: CODEDESC33 </br>";
    }

    echo "<hr/>";

?>