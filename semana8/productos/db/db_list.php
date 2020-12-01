<?php
    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from Productos;");

    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>id_producto</th>
                <th>producto</th>
                <th>precio</th>
                <th>existencias</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            ";

    print($table);

    while ($row = $resultado->fetchArray()) {
        $id_producto = $row['id_producto'];
        $producto = $row['producto'];
        $precio = $row['precio'];
        $existencias = $row['existencias'];

        $table = "
            <tr>
                <td>$id_producto</td>
                <td>$producto</td>
                <td>$precio</td>
                <td>$existencias</td>
                <td><a href='view.php?id_producto=$id_producto'>View</a></td>
                <td><a href='update.php?id_producto=$id_producto'>Update</a></td>
                <td><a href='delete.php?id_producto=$id_producto'>Delete</a></td>
            </tr>
        ";

        print($table);
    }
 
    print("</table>");
?>