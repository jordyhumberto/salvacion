<?php
require 'conexion.php';
$sql='SELECT * FROM fecha';
$resultado=$mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>salvame</title>
</head>
<body>
    <p>Arregla fechas!</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>FECHA</th>
                <th>FECHA1</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=$resultado->fetch_array(MYSQLI_ASSOC)){ ?>
                <tr>
                    <td><?php echo $row['IDFECHA'];?></td>
                    <td><?php echo $row['FECHA'];?></td>
                    <td><?php echo $row['FECHA1'];?></td>
                </tr>
            <?php } ?>
        </tbody>
        <a href="corrector.php">puedo repararlo!!</a>
        <img src="" alt="" srcset="">
    </table>
</body>
</html>