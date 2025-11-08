<?php
    $pattern = '/[a-z]/';
    $text = 'This Is A Sample Text.';

    if (preg_match($pattern, $text)) {
        echo "Huruf Kecil Ditemukan!";
    } else {
        echo "Tidak Ada Huruf Kecil";
    }

    echo "<hr>";

    $pattern = '/[0-9]+/';
    $text = 'These Are 123 Apples.';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    } else {
        echo "Tidak Ada Yang Cocok!";
    }

    echo "<hr>";

    $pattern = '/Apple/';
    $replacement = 'Banana';
    $text = 'I Like Apple Pie.';
    $new_text= preg_replace($pattern, $replacement, $text);
    echo $new_text; 

    echo "<hr>";

    $pattern = '/Go*d/';
    $text = 'God Is Good';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    } else {
        echo "Tidak Ada Yang Cocok!";
    }

    echo "<hr>";

    $pattern = '/Go?d/';
    $text = 'God Is Good';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    } else {
        echo "Tidak Ada Yang Cocok!";
    }

    echo "<hr>";
    $pattern = '/Go{2,3}d/'; 
    $text1 = 'God Is Good';

    if (preg_match($pattern, $text1, $matches1)) {
        echo "Cocokkan : " . $matches1[0];
    } else {
        echo "Tidak Ada Yang Cocok!";
    }

    echo "<hr>";
    $text2 = 'God Is Gooood'; 
    if (preg_match($pattern, $text2, $matches2)) {
        echo "Cocokkan : " . $matches2[0];
    } else {
        echo "Tidak Ada Yang Cocok!";
    }
?>