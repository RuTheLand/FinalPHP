<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stiles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <form action="siguiente.php" method="GET">
        
    </form>
    <?php 
       // conexion bbdd y sesion
        include 'he.php';
        include 'si.php';
        include 'co.php';
        session_start();
        include 'noad.php';
        echo "<form action=adminlog.php method=GET>";
            echo "<input type='text' name='n'>Nombre</input>";
            echo "</br>";
            echo "<input type='password' name='p'>Contrasenya</input>";
            echo "</br>";
            echo "<input type='submit' value='Entrar'>";
        echo "</form>";
        echo $_SESSION["adch"];

        if (isset($_REQUEST['n']) && $_REQUEST['p']!=NULL){
            $n=$_REQUEST['n'];
            $p=$_REQUEST['p'];
            $sql="SELECT * FROM usuarios WHERE Nombre='$n' AND Pass='$p'";
            $result = $conn -> query($sql);
            $var= $result->num_rows;
            if($var!=0 && $n =='admin'){
                $_SESSION['adch']=1;
                header("Location: admin.php");
            }
        }else{
            echo "</br>"; 
            echo "Por favor escriba correctamente un usuario administrador.";
        }
        
        include 'fo.php';
    ?>
    </body>
</html>