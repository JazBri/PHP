<?php
                $a = 0;
                $b = 0;
                $c = 0;
                $d = 0;
                if(isset($_POST)){
                    $a = $_POST['num1'];
                    $b = $_POST['num2'];
                    $c = $_POST['num3'];
                    $d = $_POST['num4'];
                    echo $a;
                    echo $b;
                    echo $c;
                    echo $d;
                }else{
                    echo "No se encontró ningún dato";
                }
    
                if($a > $b || $a > $c || $a > $d){
                    $mayor = $a;
                }else{
                    if($b > $a || $b > $c || $b > $d){
                        $mayor = $b;
                    }else{
                        if($c > $a || $c > $b || $c > $d){
                            $mayor = $c;
                        }else{
                            $mayor = $d;
                        }
                    }
                }
                echo "<hr/>";
 
?>