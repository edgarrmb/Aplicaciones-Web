<!-- 
    Creador: Edgar Ramon Milian Briones
    Fecha: 23/10/2022 
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>

    <section class="pre" id="presentación">
        <?php
            print("Edgar Ramon Milian Briones <br>");
            printf("Programación 5PV <br>");
            echo "Desarrolla aplicaciones Web con conexión a bases de datos <br>";
        ?>
    </section>
    <br>
    <center>
        <section class="day" id="hoy">
            <?php
                print date('d-m-y');
            ?>
        </section>
    </center>
    <br>
    <section class="men" id="mensaje">
        <?php
            printf("Mensaje alusivo a Introducción de PHP");
        ?>
    </section>
    
</body>
</html>