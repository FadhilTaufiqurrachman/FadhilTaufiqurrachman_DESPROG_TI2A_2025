<?php 
    function perkenalan() {
        echo "Assalamualaikum, ";
        echo "Perkenalkan, Nama Saya Fadhil Taufiqurrachman. <br>";
        echo "Senang Berkenalan Dengan Anda. <br>";
    }

    perkenalan();
    echo "<hr>";
    perkenalan();
    echo "<hr>";


    function perkenalan2($nama, $salam) {
        echo "$salam, ";
        echo "Perkenalkan, Nama Saya ".$nama. "<br>";
        echo "Senang Berkenalan Dengan Anda. <br>";
    }

    perkenalan2("Hamdana", "Hallo");
    echo "<hr>";

    $saya = "Elok";
    $ucapanSalam = "Selamat Pagi";

    perkenalan2($saya, $ucapanSalam);
    echo "<hr>";

    
    function perkenalan3($nama, $salam="Assalamualaikum") {
        echo "$salam, ";
        echo "Perkenalkan, Nama Saya ".$nama. "<br>";
        echo "Senang Berkenalan Dengan Anda. <br>";
    }

    perkenalan2("Hamdana", "Hallo");
    echo "<hr>";

    $saya = "Elok";
    $ucapanSalam = "Selamat Pagi";

    perkenalan3($saya);      
?>