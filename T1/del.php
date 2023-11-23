<!DOCTYPE html>
<html>
    <body>
        <?php
        include 'co.php';
        $sql="DELETE FROM `productos` WHERE ID=$_REQUEST[id]";
        $conn -> query($sql);
        header("Location: admin.php");
        ?>
    </body>
</html>