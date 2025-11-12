<?php
    $koneksi = pg_connect("host=localhost port=5432 dbname=prakwebdb user=postgres password=0123456789");
    if (!$koneksi) {
        die("Koneksi Ke Database Gagal : " . pg_last_error());
    }
?>