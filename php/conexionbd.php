<?php

    $server="localhost";
    $user="root";
    $pass="";
    $db="semestre2022-1";

    $conexion=mysqli_connect($server,$user,$pass,$db);

    if(! $conexion){
        echo 'Error en la conexión';
    }
    else{
        echo 'conectado correctamente';
    }

?>