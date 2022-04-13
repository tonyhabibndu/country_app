<?php

$server = "localhost";
$username = "root";
$password = "";
$database_name = "country_management";

$connection_string = "mysql:host={$server};dbname={$database_name}";

try{
    $pdo = new PDO($connection_string, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $exception) {
    die($exception->getMessage());
}