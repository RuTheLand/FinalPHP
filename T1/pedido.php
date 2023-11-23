<!DOCTYPE html>
<html>
    <body>
    <form action="siguiente.php" method="GET">
        
    </form>
    <?php 
       // conexion bbdd y sesion
       include 'co.php';
        session_start();
        $lista=$_SESSION['lista'];
        $sql="SELECT COUNT(DISTINCT id_compra) FROM pedidos";
        $result = $conn ->  query($sql);
        $id=0;
        var_dump($id);
        $productos="";
        for ($i=0;$i<count($lista);$i++){
            if ($productos != ""){
                $productos=$productos.", ".$lista[$i];
            }else{$productos=$lista[$i];}
        }
        $sql="INSERT INTO pedidos (id_producto)VALUES ('$productos')";
            $result = $conn ->  query($sql);
        
        header("Location: void.php");
    ?>
    </body>
</html>