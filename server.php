<?php
    error_reporting(E_ALL ^ E_NOTICE);
    $servername = "127.0.0.1";
    $database = "SPPV";
    $username = "root";
    $password = "";
    // Crear conexion
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Chequean conexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
 ?>