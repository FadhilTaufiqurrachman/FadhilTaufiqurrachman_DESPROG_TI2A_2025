<?php
    $loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Praesentium excepturi ullam exercitationem optio, quos totam dolorem minus beatae unde, 
    maxime sed quia consequuntur error nobis reprehenderit! Maxime praesentium quaerat velit.";

    echo "<p>{$loremIpsum}</p>";
    echo "Panjang Karakter : " . strlen($loremIpsum) . "<br>";
    echo "Panjang Kata : " . str_word_count($loremIpsum) . "<br>";
    echo "<p>" . strtoupper($loremIpsum) . "<br>";
    echo "<p>" . strtolower($loremIpsum) . "<br>";
?>