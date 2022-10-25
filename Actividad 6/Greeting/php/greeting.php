<?php
    $nombre = $_POST['name'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludar</title>
    <link rel="stylesheet" href="../css/style3.css">
</head>
<body>

    <h2>Hola <?php echo $nombre?></h2>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Telefono</th>
        </tr>
        <tr>
            <td><?php echo $nombre ?></td>
            <td><?php echo $edad ?></td>
            <td><?php echo $telefono ?></td>
        </tr>
    </table>
    <a href="../html/greetingForm.html"><span onclick="closeImg()">X</span></a>
</body>
</html>