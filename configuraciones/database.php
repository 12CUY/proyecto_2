<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'domotica';
// login y registre valid
try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
?> 
