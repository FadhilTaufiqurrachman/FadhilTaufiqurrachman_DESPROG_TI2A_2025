<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            $_SESSION["favcolor"] = "Green";
            $_SESSION["favanimal"] = "Cat";
            echo "Session Variables Are Set";
        ?>      
    </body>
</html>