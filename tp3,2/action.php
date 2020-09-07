<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="baseStyle.css">
</head>

<body>
    <div>
        <table>
            <tr>
                <th> YOUR BASIC INFO</th>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php
                    if (isset($_POST['inputName']))
                        echo ($_POST['inputName']); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php
                    if (isset($_POST['inputEmail']))
                        echo ($_POST['inputEmail']); ?></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?php
                    if (isset($_POST['inputPassword']))
                        echo ($_POST['inputPassword']); ?></td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td><?php
                    if (isset($_POST['inputBirthday']))
                        echo ($_POST['inputBirthday']); ?></td>
            </tr>
            <tr>
                <th>Sex</th>
                <td><?php
                    if (isset($_POST['radioOption'])) {
                        $radio = $_POST['radioOption'];
                        $value = ($radio == 'femaleRadio') ? 'Femenino' : 'Masculino';
                        echo $value;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th>YOUR PROFILE</th>
            </tr>
            <tr>
                <th>About You</th>
                <td><?php
                    if (isset($_POST['inputAbout']))
                        echo ($_POST['inputAbout']);
                    ?></td>
            </tr>
            <tr>
                <th>Role</th>
                <td><?php
                    $selectVaule = $_POST['inputGroupSelect'];
                    echo $selectVaule;
                    ?>
                </td>
            </tr>
            <th>Interests</th>
            <td>
                <?php
                if (isset($_POST['Data']))
                    echo $_POST['Data'];
                if (isset($_POST['Design']))
                    echo $_POST['Design'];
                if (isset($_POST['Business']))
                    echo $_POST['Business'];
                if (isset($_POST['Unit']))
                    echo $_POST['Unit'];
                if (isset($_POST['Cloud']))
                    echo $_POST['Cloud'];
                if (isset($_POST['Web']))
                    echo $_POST['Web'];
                ?>
            </td>



        </table>
    </div>
</body>

</html>