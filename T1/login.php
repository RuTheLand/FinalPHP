<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stiles.css">
    </head>
    <body>
    <form action="siguiente.php" method="GET">
        
    </form>
    <?php 
       // conexion bbdd y sesion
        include 'he.php';
        include 'co.php';
        session_start();
        include 'noad.php';
        echo "<form action=login.php method=GET>";
            echo "<input type='text' name='n'>Nombre</input>";
            echo "</br>";
            echo "<input type='text' name='p'>Contrasenya</input>";
            echo "</br>";
            echo "<input type='submit' value='Entrar'>";
        echo "</form>";

        if ($_REQUEST['n']!=NULL && $_REQUEST['p']!=NULL){
            $n=$_REQUEST['n'];
            $p=$_REQUEST['p'];
            $sql="SELECT * FROM usuarios WHERE Nombre='$n' AND Pass='$p'";
            $result = $conn -> query($sql);

            $var= $result->num_rows;
            if($var!=0){header("Location: pedido.php");}
        }else{
            echo "</br>"; 
            echo "Por favor escriba correctamente un usuario y contrasenya";
        }
        
        include 'fo.php';
    ?>
    </body>
</html>