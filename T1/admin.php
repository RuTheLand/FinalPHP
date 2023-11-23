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
        //inclir cabecera y menú
        include 'he.php';
        include 'si.php';
        // conexion bbdd y sesion
        include 'co.php';
        session_start();
        if ($_SESSION['adch'] != 1){
            header("Location: adminlog.php");
        }
        
        //los pedidos
        $sql = "select * from pedidos";
        $result = $conn -> query($sql);
        echo "<table border=1>";
        echo "<tr>";
        echo "<td>Id_Pedido</td>";
        echo "<td>Id_Productos</td>";
        echo "</tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['id_compra']."</td>";
            echo "<td>".$row['id_producto']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</br>";
        //los productos
        $sql = "select * from productos ORDER BY ID ASC";
        $result = $conn -> query($sql);
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
            echo "</tr>";
        }
        echo "</table>";
        echo "</br>";
        //Nuevo producto:
        echo "<p>Nuevo producto</p>";
        echo "<form action=up.php method=get>";
        echo "<p>Nombre</p>";
        echo "<input type='text' name='Nombre'/>";
        echo "<p>Descripcion</p>";
        echo "<input type='text' name='Descripcion'/>";
        echo "<p>Stock</p>";
        echo "<input type='text' name='Stock'/>";
        echo "<p>Precio</p>";
        echo "<input type='text' name='Precio'/>";
        echo "<input type='submit' name='tipo'>";
        echo "</form>";
        //Borrar
        echo "<p>Eliminar</p>";
        echo "<form action=del.php method=get>";
        echo "<p>Id a borrar</p>";
        echo "<input type='text' name='id'/>";
        echo "<input type='submit'/>";
        echo "</form>";
        //modificar stock
        echo "<p>Cambia stock</p>";
        echo "<form action=mod.php method=get>";
        echo "<p>Producto</p>";
        echo "<input type='text' name='id'/>";
        echo "<p>Nuevo stock</p>";
        echo "<input type='text' name='stock'/>";
        echo "<input type='submit'/>";
        echo "</form>";
        //fin
        include 'fo.php';
    ?>
    </body>
</html>