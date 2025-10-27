<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $ListDosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
            echo $ListDosen[2] . "<br>";
            echo $ListDosen[0] . "<br>";
            echo $ListDosen[1] . "<br>";
            echo "<br>";

            // Menggunakan Loop
            $length = count($ListDosen);
            for ($i = 0; $i < $length; $i++) { 
                echo $ListDosen[$i] . "<br>";
            }
        ?>
    </body>
</html>