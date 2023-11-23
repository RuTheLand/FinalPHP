<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stiles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php

        //inclir cabecera y menú
        include 'he.php';
        include 'si.php';
        // conexion bbdd y sesion
        include 'co.php';
        session_start();
        include 'noad.php';
        $con=count($_SESSION['lista']);
        $total=0;
        for($i=0;$i<$con;$i++){
            $punt = $_SESSION['lista'][$i];
            $sql = "select * from productos where ID=$punt";
            $result = $conn -> query($sql);
            $row = $result->fetch_assoc();
            echo "producto número $i"." | ";
            echo $row['ID']." | ";
            echo $row['Nombre'].": ";
            echo $row['Descripcion']." | ";
            echo $row['Stock']." | ";
            echo $row['Imagen']." | ";
            echo $row['Precio']." | ";
            echo $row['FCreacion']." | ";
            echo $row['FModificacion'];
            echo "</br>";
            $total=$total+$row['Precio'];
        }
            echo "El total es $total";
            echo "</br>";
            echo "</br>";
        echo "<form action='void.php' method='GET'>";
            echo "<input type='submit' value='BorrarTodo'>";
        echo "</form>";
        echo "</br>";
        //fracaso al borrar unitariamente
        /*echo "<form action='voidunitario.php' method='GET'>";
        echo "<input type='text' name='posicion'>";
            echo "<input type='submit' value='BorrarEsto'>";
        echo "</form>";
        */
        //el pedido

        echo "<form action='login.php' method='GET'>";
            echo "<input type='submit' value='Realizar_Pedido'>";
        echo "</form>";

        //fin
        include 'fo.php';
        ?>
    </body>
</html>