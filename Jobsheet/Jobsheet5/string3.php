<?php
    $pesan = "Saya Arek Malang";
    echo strrev($pesan) . "<br>";

    $pesanPerKata = explode(" ", $pesan);
    $pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
    $pesan = implode(" ", $pesanPerKata);

    echo $pesan . "<br>";
?>