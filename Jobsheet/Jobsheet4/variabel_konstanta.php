<?php
    $angka1 = 10;
    $angka2 = 5;
    $hasil = $angka1 + $angka2;
    echo "Hasil Penjumlahan $angka1 dan $angka2 adalah $hasil. <br>";

    $benar = true;
    $salah = false;
    echo "Variabel Benar : $benar, Variabel Salah : $salah <br>";

    define("Nama_Situs", "WebsiteKu.com");
    define("Tahun_Pendirian", 2023);

    echo "Selamat Datang Di ". Nama_Situs . ", Situs Yang 
    Didirikan Pada Tahun " . Tahun_Pendirian . ".";
?>