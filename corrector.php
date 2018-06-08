<?php
    require 'conexion.php';
    $sql='SELECT * FROM fecha';
    $resultado=$mysqli->query($sql);
    while($row=$resultado->fetch_array(MYSQLI_ASSOC)){
        $cad='';
        if(strlen($row['FECHA'])<10 && strlen($row['FECHA'])!=0 ){
            $cad='0'.$row['FECHA'];
            $cad=substr($cad,-4,4).'-'.substr($cad,-7,2).'-'.substr($cad,-10,2);
        }else if(strlen($row['FECHA'])==10){
            $cad=$row['FECHA'];
            $cad=substr($cad,-4,4).'-'.substr($cad,-7,2).'-'.substr($cad,-10,2);
        }
        $id=$row['IDFECHA'];
        $sqln="UPDATE fecha SET FECHA1='$cad' WHERE IDFECHA='$id'";
        $resultadon=$mysqli->query($sqln);
        if($resultadon){
            echo 'se actualizo';echo '<br>';
        }else{
            echo 'no se actualizo';
        }
    }
    echo '<a href="index.php">regresar</a>';
    echo '<img src="felix.png" alt="felix" style="width:150px;">'
?>