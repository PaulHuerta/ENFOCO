<?php

$server = 'bw4m3dkhbvwstquvhssc-mysql.services.clever-cloud.com';
$username = 'ujyxmr7ve9ge73e9';
$password = 'AkxUBXBKqI9Hq9Y2V1QG';
$database = 'bw4m3dkhbvwstquvhssc';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);

    // if ($conn) {
    //     print("Conexion establecida");
    // }
} catch (PDOException $e) {
    die('Connected error: ' . $e->getMessage());
}
