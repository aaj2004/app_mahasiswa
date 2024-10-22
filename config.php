<?php
$host = 'localhost';
$db = 'mhs_aplikasi';
$user = 'root'; // default user di Laragon
$pass = ''; // default password di Laragon

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>