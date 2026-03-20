<?php
$host = "db";
$user = "root";
$password = "root";
$database = "testdb";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "<h1>Hola Mundo desde PHP con MySQL en Docker</h1>";

$result = $conn->query("SELECT NOW() as fecha");

if ($result) {
    $row = $result->fetch_assoc();
    echo "<p>Fecha desde MySQL: " . $row['fecha'] . "</p>";
}

$conn->close();
?>
