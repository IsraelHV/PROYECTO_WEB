<?php

    $conexion=mysqli_connect("localhost","root","","semestre2022-1");
    $sql = "SELECT * FROM alumno";
    $resultado = mysqli_query($conexion,$sql);
    $numFilasResultado =mysqli_num_rows($resultado);
    $filas = mysqli_fetch_array($resultado, MYSQLI_BOTH);

    echo "Tienes: ".$numFilasResultado. " registros en la tabla alumno";

    print_r($filas);

    echo $filas['id_estudiante'];

    echo "</p>";

    while($filas1=mysqli_fetch_array($resultado)){
        echo $filas1['id_estudiante']."-".$filas1['apellido_Paterno']."-".$filas1['apellido_Materno'];
        echo "</p>";
    }


    // Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
    $link = new PDO('mysql:host=localhost; dbname=semestre2022-1', 'root', ''); // el campo vaciío es para la password. 


    foreach ($link->query('SELECT * from alumno') as $row){ // aca puedes hacer la consulta e iterarla con each.
        echo $row['id_estudiante']; // aca te faltaba poner los echo para que se muestre el valor de la variable. 
        echo $row['nombre'];
        echo $row['apellido_Paterno'];
        echo $row['apellido_Materno'];
    }


?>