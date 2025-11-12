<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            session_unset();
            session_destroy();
            echo "All Session Variables Are Now Removed, And The Session Is Destroyed";
        ?>      
    </body>
</html>