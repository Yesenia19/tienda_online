<?php
    $id_producto = $_GET['id_producto'];
    $producto = $_GET['producto'];
    $precio = $_GET['precio'];
    $existencias = $_GET['existencias'];

    $db = new SQLite3('../../tienda.db');

    $db->exec("INSERT INTO Productos (id_producto,producto,precio,existencias) VALUES ('$id_producto','$producto','$precio', '$existencias');");
    
    header("Location: ../index.php");

?>