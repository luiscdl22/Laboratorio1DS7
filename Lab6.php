<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

<h2>Calculadora</h2>

<form method="POST">
    <label>Número 1:</label><br>
    <input type="number" name="num1" required><br><br>

    <label>Número 2:</label><br>
    <input type="number" name="num2" required><br><br>

    <label>Operación:</label><br>
    <select name="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
    </select><br><br>

    <input type="submit" value="Calcular">
</form>

<?php

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacion'])) {

    $num1 = (float) $_POST['num1'];
    $num2 = (float) $_POST['num2'];
    $operacion = $_POST['operacion'];

    if ($operacion == "suma") {
        $resultado = $num1 + $num2;
    } elseif ($operacion == "resta") {
        $resultado = $num1 - $num2;
    } elseif ($operacion == "multiplicacion") {
        $resultado = $num1 * $num2;
    }

    echo "<h3>Resultado: " . $resultado . "</h3>";
}

?>

</body>
</html>
