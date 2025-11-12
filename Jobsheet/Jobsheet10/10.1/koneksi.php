<?php
    $server   = "localhost"; 
    $username = "root";      
    $password = "";          
    $database = "prakwebdb"; 

    $connect = mysqli_connect($server, $username, $password, $database);

    if (!$connect) {
        die("Koneksi Ke Database Gagal : " . mysqli_connect_error());
    }
?>