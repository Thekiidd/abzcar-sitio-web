<?php
// Configuración de la base de datos
// Copia este archivo como config.php y ajusta los valores según tu entorno

$host = 'localhost';        // Host de la base de datos
$user = 'root';            // Usuario de la base de datos
$password = '';            // Contraseña de la base de datos
$db = 'abzcar';            // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($host, $user, $password, $db);

// Verificar conexión
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

// Configurar charset
$conn->set_charset("utf8");
?> 