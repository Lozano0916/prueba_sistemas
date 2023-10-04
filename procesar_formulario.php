<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión a la base de datos fallida: " . $conn->connect_error);
}

// Recopila los datos del formulario
$nombre = $_POST["user_name"];
$apellido = $_POST["user_lastname"];
$anio_nacimiento = $_POST["user_birthyear"];
$correo = $_POST["user_mail"];
$mensaje = $_POST["user_message"];

// Inserta los datos en la base de datos
$sql = "INSERT INTO datospersonales(nombre, apellido, anionacimiento, correo, mensaje)
        VALUES ('$nombre', '$apellido','$anio_nacimiento', '$correo', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Datos ingresados correctamente.";
} else {
    echo "Error al ingresar datos: " . $conn->error;
}

$conn->close();
?>
