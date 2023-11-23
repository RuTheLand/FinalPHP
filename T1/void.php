<!DOCTYPE html>
<html>
    <body>
    <form action="siguiente.php" method="GET">
        
    </form>
    <?php 
        session_start();
        unset($_SESSION['lista']);
        header("Location: index.php");
    ?>
    </body>
</html>