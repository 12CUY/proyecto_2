<?php
    session_start();
    $server = "localhost";
    $username="root";
    $password="";
    $dbname="domotica_2";//qrcodedb2

    $conn = new mysqli($server,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection failed" .$conn->connect_error);
    }
?>