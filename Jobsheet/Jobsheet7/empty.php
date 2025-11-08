<?php 
    $myArray = array();
    if (empty($myArray)) {
        echo "Array Tidak Terdefenisi Atau Kosong.";
    } else {
        echo "Array Terdefinisi Dan Tidak Kosong.";
    }
    echo "<hr>";

    if (empty($nonExistentVar)) {
        echo "Variabel Tidak Terdefenisi Atau Kosong.";
    } else {
        echo "Variabel Terdefenisi Dan Tidak Kosong.";
    }
?>