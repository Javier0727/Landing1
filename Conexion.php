<?php 
$servername = "mysql.hostinger.mx";
$username = "u703541910_root";
$password = "tango911ABATIDO#";
$dbname = "u703541910_acade";

// Crear conexion
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check conexion
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>