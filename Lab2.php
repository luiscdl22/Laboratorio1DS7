<!DOCTYPE html>
<html>
<head>
    <title>Laboratorio 2 - Circulo</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

    <h2>Calculo de area y Perimetro de un Circulo</h2>
    
    <form method="POST">
        <label for="radio">Ingrese el radio del circulo:</label>
        <input type="text" name="radio" id="radio" required>
        <input type="submit" value="Calcular">
    </form>
    <br>

<?php
if (isset($_POST["radio"])) {
    // 1. Obtener el radio ingresado (como numero real / float)
    $radio_ingresado = (float)$_POST["radio"];
    
    // Valor de PI
    $valor_pi = 3.14159;
    
    // 2. Calcular elrea y el permetro con formulas simples
    $area_calculada = $valor_pi * ($radio_ingresado * $radio_ingresado);
    $perimetro_calculado = 2 * $valor_pi * $radio_ingresado;
    
    // 3. Mostrar los resultados en pantalla
    echo "Resultados:<br>";
    echo "Para un circulo con radio de: " . $radio_ingresado . "<br>";
    echo "El area es: " . $area_calculada . "<br>";
    echo "El perimetro es: " . $perimetro_calculado . "<br>";
    echo "</div>";
}
?>

</body>
</html>
