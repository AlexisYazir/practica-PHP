<?php
    echo "My first PHP script!";
    echo "<br>";
    echo "Mis datos:";
    $nombre = "Alexis Yazir";
    $edad = 20;
    $estatura = 1.78;
    echo "Soy... " .strtoupper($nombre). " tengo " .($edad) ." años y mido " .$estatura . " metros";
    echo "<br>";
    var_dump(is_int($nombre));
    echo "<br>";
    $x = 34;
    $y = 300.78;
    $z = $x + $y;
    $r = $x - $y;
    $d = $x / $y;
    $e = $x**$x;
    $m = $y*$x;
    echo "La suma de $x + $y = $z <br>";
    echo "La resta de $y - $x = $r <br>";
    echo "La division de $y / $x = $d <br>";
    echo "La multiplicación de $y * $x = $m <br>";
    echo "La exponenciación de $x ** $x = $e <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicas PHP</title>
</head>
<body>
    <h3>hola mundo!!</h3>
</body>
</html>