<?php
const servername = "localhost";
const dbUser = "root";
const dbPassword = "";
const dbName = "personal";

try {
    $conn = new PDO("mysql:host=".servername.";dbname=".dbName, dbUser, dbPassword);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


