<?php 
    function hitungUmur($thn_lahir, $thn_sekarang) {
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    echo "Umur Saya Adalah " . hitungUmur(2006, 2025) . " Tahun";
    echo "<br>";
    
    function perkenalan($nama, $salam="Assalamualaikum") {
        echo $salam . ", ";
        echo "Perkenalkan, Nama Saya " . $nama . "<br>";

        echo "Saya Berusia " . hitungUmur(2006, 2025) . " Tahun <br>";
        echo "Senang Berkenalan Dengan Anda <br>";
    }

    perkenalan("Elok")
?>