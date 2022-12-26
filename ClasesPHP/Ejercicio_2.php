<?php

    if($_POST){
        //Recibe información del formulario HTML por método POST
        $nombre = $_POST['txtNombre'];

        echo "Hola " . $nombre;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Ejercicio 2</title>
</head>
<body>

<form action="Ejercicio_2.php" method="post">
    Nombre:
    <input type="text" name="txtNombre" id="">
    <br>
    <input type="submit" value="Enviar">
</form>
    
</body>
</html>
