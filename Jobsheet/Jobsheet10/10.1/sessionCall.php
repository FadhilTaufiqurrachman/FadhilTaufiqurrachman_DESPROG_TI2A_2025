<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            echo "Favourite Color Is " . $_SESSION["favcolor"] . "<br>";
            echo "Favourite Animal Is " . $_SESSION["favanimal"] . "<br>"
        ?>      
    </body>
</html>