<?php
    $nilaiNumerik = 92;
    
    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai Huruf : A";
    } elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai Huruf : B";
    } elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf : C";
    } elseif ($nilaiNumerik < 70) {
    echo "Nilai Huruf : D";
    }
    echo "<br>";

    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;
    while ($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }
    echo "<br> Atlet Tersebut Memerlukan $hari Hari Untuk Mencapai Jarak 500 Kilometer. <br> <br>";

    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;
    for ($i = 1; $i <= $jumlahLahan; $i++) {
        $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    }
    echo "Jumlah Buah Yang Akan Dipanen Adalah : $jumlahBuah <br> <br>";

    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;
    foreach ($skorUjian as $skor) {
        $totalSkor += $skor;
    }
    echo "Total Skor Ujian Adalah : $totalSkor <br> <br>";

    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
    foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
    }

    $nilaiSiswa1 = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    sort($nilaiSiswa);
    $jumlahNilai = 0;
    $jumlahElemen = 0;
    $jumlahSiswa = count($nilaiSiswa);

    for ($i = 2; $i < $jumlahSiswa - 2; $i++) {
        $jumlahNilai += $nilaiSiswa[$i];
        $jumlahElemen++;
    }

    $rataRata = $jumlahNilai / $jumlahElemen;

    echo "<hr> Total Nilai Setelah Mengabaikan 2 Nilai Terendah Dan 2 Nilai Tertinggi : " . $jumlahNilai . "<br>";
    echo "Rata-Rata Nilai: " . $rataRata;

    $harga_produk = 120000;
    $diskon = 0;
    if ($harga_produk > 100000) {
        $diskon = $harga_produk * 0.20;
    }
    $harga_setelah_diskon = $harga_produk - $diskon;
    echo "<hr> Harga Produk Adalah Rp. " . $harga_produk . " Dan Mendapatkan Diskon Sebesar 20% <br>";
    echo "Harga Yang Harus Dibayar Setelah Diskon : Rp. " . $harga_setelah_diskon;

    $total_skor = 650;
    $hadiah_tambahan = ($total_skor > 500) ? "Ya" : "Tidak";

    echo "<hr> Total Skor Pemain Adalah " . $total_skor . " Poin <br>";
    echo "Apakah Pemain Mendapatkan Hadiah Tambahan? " . $hadiah_tambahan;
?>