<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stiles.css">
    </head>
    <body>
    <form action="siguiente.php" method="GET">
        
    </form>
    <?php 
        //inclir cabecera y menú
        include 'he.php';
        include 'si.php';
        // conexion bbdd y sesion
        include 'co.php';
        session_start();
        //conslta
        //$make = "INSERT INTO productos values (50, 'Rosa', 'Rosal', 20, 1, 29.99, now(), now())";
        $sql = "select * from productos ORDER BY ID ASC";
        //$INS = $conn -> query($make);
        //ejecuto consulta
        $result = $conn -> query($sql);
        //construir tabla
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Descripcion</th>";
        echo "<th>Stock</th>";
        echo "<th>Imagen</th>";
        echo "<th>Precio</th>";
        echo "<th>FCreacion</th>";
        echo "<th>FModificacion</th>";
        echo "<th>Añadir</th>";
        echo "</tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['ID']."</td>";
            echo "<td>".$row['Nombre']."</td>";
            echo "<td>".$row['Descripcion']."</td>";
            echo "<td>".$row['Stock']."</td>";
            echo "<td>".$row['Imagen']."</td>";
            echo "<td>".$row['Precio']."</td>";
            echo "<td>".$row['FCreacion']."</td>";
            echo "<td>".$row['FModificacion']."</td>";
            echo "<td>";
            echo "<form action='index.php' method='GET'>";
                echo "<input type='submit' name='nu' value=".$row['ID'].">";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // session 

        if (isset($_SESSION['lista']) != true){
            $_SESSION['lista']=[];
        }
        $con=count($_SESSION['lista']);
        if(isset($_REQUEST['nu'])){
            $_SESSION['lista'][$con]=$_REQUEST['nu'];
            echo "Lista de pedidos";
            echo "</br>";
            for($i=0;$i<=$con;$i++){
                echo $_SESSION['lista'][$i];
                echo "</br>";
            }
        }
        
        //Borra
        echo "<form action='void.php' method='GET'>";
            echo "<input type='submit' value='BorrarTodo'>";
        echo "</form>";
        
        //fin
        include 'fo.php';
    ?>
    </body>
</html>