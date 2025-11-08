<?php 
    $umur;
    if (isset($umur) && $umur >= 18) {
        echo "Anda Sudah Dewasa.";
    } else {
        echo "Anda Belum Dewasa Atau Variabel 'umur' Tidak Ditemukan.";
    }
    echo "<hr>";

    $data = array("nama" => "Jane", "usia" => 25);
    if (isset($data["nama"])) {
        echo "Nama  : " . $data["nama"];
    } else {
        echo "Variabel 'nama' Tidak Ditemukan Dalam Array.";
    }
?>