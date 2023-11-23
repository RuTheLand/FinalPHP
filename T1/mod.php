<!DOCTYPE html>
<html>
    <body>
        <?php
        include 'co.php';
        session_start();
        $sql="UPDATE `productos` SET `Stock`='$_REQUEST[stock]', `FModificacion`=now() WHERE ID=$_REQUEST[id]";
        $conn -> query($sql);
        header("Location: admin.php");
        ?>
    </body>
</html>