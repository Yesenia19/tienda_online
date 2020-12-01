<?php

    $id_producto = $_GET["id_producto"];

    $db = new SQLite3("../tienda.db");
    $resultado = $db->query("SELECT * from Productos where id_producto='$id_producto';");
    while ($row = $resultado->fetchArray()) {
        $id_producto = $row["id_producto"];
        $producto = $row["producto"];
        $precio = $row["precio"];
        $existencias = $row["existencias"];
    }

    $form = "
        <div class='form-group'>
            <label for='id_producto'>id_producto</label>
            <input type='text' readonly class='form-control' id='id_producto' name='id_producto' aria-describedby='id_producto' value='$id_producto'>
        </div>
        <div class='form-group'>
            <label for='producto'>producto</label>
            <input type='text' class='form-control' id='producto' name='producto' aria-describedby='producto' value='$producto'>
        </div>
        <div class='form-group'>
            <label for='precio'>precio</label>
            <input type='text' class='form-control' id='precio' name='precio' aria-describedby='precio' value='$precio'>
        </div>
        <div class='form-group'>
            <label for='existencias'>existencias</label>
            <input type='text' class='form-control' id='existencias' name='existencias' aria-describedby='existencias' value='$existencias'>
        </div>
        ";

    print($form);
?>