<?php

$sName = "mysql";
$uName = "root";
$pass = "password";
$db_name = "websec";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}