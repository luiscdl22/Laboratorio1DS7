<?php

if (isset($_POST['nombre']) && isset($_POST['edad'])) {

    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $edad = (int) trim($_POST['edad']);

    echo "<h2>Resultados</h2>";
    echo "El nombre es: " . $nombre . "<br>";
    echo "La edad es: " . $edad . "<br><br>";

    if ($edad > 18) {
        echo "Usted puede votar en las próximas elecciones 2028";
    } else {
        echo "Usted no es mayor de edad";
    }

} else {
    echo "No se enviaron datos correctamente.";
}

?>
