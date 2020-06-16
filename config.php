<?php
session_start();
global $pdo;
try {
    $pdo = new PDO("mysql:dbname=db_classificados;host=localhost", "root", "root");
} catch (PDOException $e) {
    echo "Falhou: " . $e->getMessage();
    exit;
}
