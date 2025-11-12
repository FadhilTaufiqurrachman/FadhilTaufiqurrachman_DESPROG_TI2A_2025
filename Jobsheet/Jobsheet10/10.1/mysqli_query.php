<?php
    // $hostname = "localhost";
    // $username_db = "root";
    // $password_db = "";
    // $database_name = "prakwebdb";
    // $connect = mysqli_connect($hostname, $username_db, $password_db, $database_name);

    // if (!$connect) {
    //     die("Koneksi Ke Database Gagal : " . mysqli_connect_error());
    // }

    // $sql = "CREATE TABLE user (
    //     id INT(11) AUTO_INCREMENT PRIMARY KEY,
    //     username VARCHAR(50) NOT NULL,
    //     password VARCHAR(50) NOT NULL
    // )";

    // if (mysqli_query($connect, $sql)) {
    //     echo "Tabel 'user' Berhasil Dibuat Di Dalam Database 'prakwebdb'.";
    // } else {
    //     echo "Error Membuat Tabel : " . mysqli_error($connect);
    // }

    // mysqli_close($connect);

    $hostname = "localhost";
    $username_db = "root";
    $password_db = "";
    $database_name = "prakwebdb";
    $connect = mysqli_connect($hostname, $username_db, $password_db, $database_name);

    if (!$connect) {
        die("Koneksi Ke Database Gagal : " . mysqli_connect_error());
    }

    $username_data = "admin";
    $password_data_asli = "123";
    $password_data_md5 = md5($password_data_asli);

    $sql = "INSERT INTO user (username, password) 
            VALUES ('$username_data', '$password_data_md5')";

    if (mysqli_query($connect, $sql)) {
        echo "Data User 'admin' Berhasil Dimasukkan Ke Dalam Tabel 'user'.";
    } else {
        echo "Error Memasukkan Data : " . mysqli_error($connect);
    }

    mysqli_close($connect);
?>