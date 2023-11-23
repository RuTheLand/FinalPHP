<!DOCTYPE html>
<html>
    <body>
    <form action="siguiente.php" method="GET">
        
    </form>
    <?php 
       
        session_start();
        var_dump($_SESSION);
        // guardo lista en una variable
        $lista=$_SESSION['lista'];
        $posicion=$_REQUEST['posicion'];
        var_dump($_SESSION['lista']);
        echo "</br>";
        var_dump($_REQUEST['posicion']);
        echo "</br>";
        //borro de la var
        unset($lista[$posicion]);
        //actualizo la lista de ssion
        $lista=array_filter($lista);
        /*for ($i=0; $i < count($lista); $i++){
            $_SESSION['lista'][$i]=$lista[$i];
        }*/
        $_SESSION['lista']=$lista;

        
       header("Location: carro.php");
    ?>
    </body>
</html>