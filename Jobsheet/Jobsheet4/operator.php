<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil Penjumlahan $a + $b = $hasilTambah <br>";
    echo "Hasil Pengurangan $a - $b = $hasilKurang <br>";
    echo "Hasil Perkalian $a * $b = $hasilKali <br>";
    echo "Hasil Pembagian $a / $b = $hasilBagi <br>";
    echo "Sisa Hasil Bagi $a % $b = $sisaBagi <br>";
    echo "Hasil Pangkat $a ** $b = $pangkat <br> <hr>";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "$hasilSama";

    echo "Apakah $a Sama Dengan $b ? "; var_dump($hasilSama); echo "<br>";
    echo "Apakah $a Tidak Sama Dengan $b ? "; var_dump($hasilTidakSama); echo "<br>";
    echo "Apakah $a Lebih Kecil Dari $b ? " ; var_dump($hasilLebihKecil); echo "<br>";
    echo "Apakah $a Lebih Besar Dari $b ? " ; var_dump($hasilLebihBesar); echo "<br>";
    echo "Apakah $a Lebih Kecil Sama Dengan $b ? "; var_dump($hasilLebihKecilSama); echo "<br>";
    echo "Apakah $a Lebih Besar Sama Dengan $b ? "; var_dump($hasilLebihBesarSama); echo "<br> <hr>";

    $hasiland = $a && $b;
    $hasilor = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Hasil AND $a && $b = "; var_dump($hasiland); echo "<br>";
    echo "Hasil OR $a || $b = "; var_dump($hasilor); echo "<br>";
    echo "Hasil NOT A !$a = "; var_dump($hasilNotA); echo "<br>";
    echo "Hasil NOT B !$b = "; var_dump($hasilNotB); echo "<br> <hr>";

    $a += $b;
    echo "Hasil A += B : $a <br>";
    $a -= $b;
    echo "Hasil A -= B : $a <br>";
    $a *= $b;
    echo "Hasil A *= B : $a <br>";
    $a /= $b;
    echo "Hasil A /= B : $a <br>";
    $a %= $b;
    echo "Hasil A %= B : $a <br> <hr>";


    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "Apakah $a Identik Dengan $b ? "; var_dump($hasilIdentik); echo "<br>";
    echo "Apakah $a Tidak Identik Dengan $b ? "; var_dump($hasilTidakIdentik); echo "<br> <hr>";

    $total_kursi = 45;
    $kursi_terisi = 28;
    $kursi_kosong = $total_kursi - $kursi_terisi;
    $persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

    echo "Jumlah Kursi Yang Masih Kosong : " . $kursi_kosong . " Kursi <br>";
    echo "Persentase Kursi Yang Masih Kosong : " . round($persentase_kosong, 2) . "% <hr>";
?>