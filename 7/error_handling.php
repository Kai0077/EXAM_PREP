<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=invalid", "root", "");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>