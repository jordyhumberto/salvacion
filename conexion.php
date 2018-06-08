<?php
    $mysqli=new mysqli('localhost','root','','fechas');
    if($mysqli->connect_error){
        echo 'error en la conexion'.$mysqli->connect_error;
        exit();
    }
?>