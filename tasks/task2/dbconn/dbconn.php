<?php

const servername = "localhost";
const dbUser = "root";
const dbPassword = "";
const dbName = "test";

try {
    $conn = new PDO("mysql:host=".servername.";dbname=".dbName, dbUser, dbPassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

