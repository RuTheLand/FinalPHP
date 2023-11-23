<!DOCTYPE html>
<html>
    <body>
        <?php
        include 'co.php';
        session_start();
        $sql = "INSERT INTO `productos`(`Nombre`, `Descripcion`, `Stock`, `Imagen`, `Precio`, `FCreacion`, `FModificacion`) VALUES ('$_REQUEST[Nombre]','$_REQUEST[Descripcion]',$_REQUEST[Stock],1,$_REQUEST[Precio],now(),now())";
        $conn -> query($sql);
        header("Location: admin.php");
        ?>
    </body>
</html>