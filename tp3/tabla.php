<html>
<?php

    if(isset($_POST)){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
     }else{
        echo "No se encontró ningún dato";
    }
?>
    <table>
        <tr>
          <td>Name</td>
          <td>Age</td>
          <td>Sex</td>
        </tr>
        <tr>
            <td><?php echo $name?> </td>
            <td><?php echo $age?></td>
            <td><?php echo $sex?></td>
        </tr>
    </table>
</html>