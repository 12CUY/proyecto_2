<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'domotica';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password, $email);
    }
        catch (PDOException $e)
         {
        die('connected failed: '.$e->getMessage());
    }
?>