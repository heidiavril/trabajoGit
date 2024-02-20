<?php
    $link = mysqli_connect("localhost", "root","") or die('No se pudo conectar: ' . mysql_error());
    $db = mysqli_select_db($link,"bddaw")or die('No se pudo seleccionar la base de datos');
    
    $nombre = $_POST['name'];
    $correoelectronico = $_POST['email'];
    $privacidad = $_POST['priv'];

    $consulta =
        "INSERT INTO novias
            (nombre,email,privacidad)
        VALUES
            ('$nombre', '$correoelectronico', '$privacidad')";
    //echo "----------------------".$consulta."--";
    mysqli_query($link,$consulta) or die ("Error al insertar en la tabla");
    echo "¡Gracias!";
?>