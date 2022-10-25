<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <link rel="stylesheet" href="../css/style4.css">
</head>
<body>

    <div class="tabla">
        <?php
    
            $numtabla = $_POST['tabla'];
            echo "Tabla del ". $numtabla;

            echo "<br><br>". $numtabla . " X 1 = ". $numtabla * 1;
            echo "<br>". $numtabla . " X 2 = ". $numtabla * 2;
            echo "<br>". $numtabla . " X 3 = ". $numtabla * 3;
            echo "<br>". $numtabla . " X 4 = ". $numtabla * 4;
            echo "<br>". $numtabla . " X 5 = ". $numtabla * 5;
            echo "<br>". $numtabla . " X 6 = ". $numtabla * 6;
            echo "<br>". $numtabla . " X 7 = ". $numtabla * 7;
            echo "<br>". $numtabla . " X 8 = ". $numtabla * 8;
            echo "<br>". $numtabla . " X 9 = ". $numtabla * 9;
            echo "<br>". $numtabla . " X 10 = ". $numtabla * 10;
        ?>
    </div>
    <a href="tablamultiplicar.php"><span>X</span></a>
</body>
</html>