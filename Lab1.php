<!DOCTYPE html>
<html>
<head>
    <title>Área del Círculo</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

<div>

<h2>Calcular Área de una Circunferencia</h2>

<form method="POST">
    Radio: <input type="number" step="any" name="radio" required><br><br>
    <input type="submit" value="Calcular">
</form>

<br>

<?php

if(isset($_POST["radio"])) { //isset() verifica si la variable "radio" ha sido enviada a través del formulario

    $radio = (float)$_POST["radio"];//recibe el valor del radio ingresado por el usuario a través del formulario convirtiéndolo a float

    $area = M_PI * pow($radio, 2);

    echo '<div>';
    echo "El área de la circunferencia con radio " . $radio . " es: " . $area;
    echo '</div>';
}

?>

</div>

</body>
</html>
