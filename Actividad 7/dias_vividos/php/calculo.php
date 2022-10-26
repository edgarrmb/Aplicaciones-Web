<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias vividos</title>
    <link rel="stylesheet" href="../css/style5.css">
</head>
<body>

<?php

    $dia1 = $_POST['dia'];
    $mes1 =$_POST['mes'];
    $año1 =$_POST['año'];

    $dia2 = $_POST['dia2'];
    $mes2 =$_POST['mes2'];
    $año2 =$_POST['año2'];

    $data1 = DateTime::createFromFormat("dmY",$dia1 . $mes1 . $año1 );
    $data2 = DateTime::createFromFormat("dmY",$dia2 . $mes2 . $año2 );

    $diff = $data2->diff($data1);

    echo $diff->format("Edad %y años, %m meses y %d dias. <br>");
    echo $diff->format("Dias vividos %a dias.");

?>
    
</body>
</html>