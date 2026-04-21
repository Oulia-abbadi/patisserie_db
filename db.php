<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=patisserie_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection Error: " . $e->getMessage());
}
?>