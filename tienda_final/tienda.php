<?php
  include 'tienda_conexion.php';
  $resultado = $db->query("SELECT * FROM Productos");
?>
<!DOCTYPE html >
<html lang="es">
	<head>
    <link href="estilos_tienda.css" rel="stylesheet" type="text/css" > 
    <meta name="viewport" content="width=device-width"/>
		<title>Tienda</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>
	<body class="cssfondo">
	    
	    <h1 class="css1label">Tienda</h1> 
	    <form method="POST" action="ticket.php" target="_blank" name="tienda">
        <div class="form-group" >
          <label for="cantidad">Cantidad:</label><p>
          <input type="number" class="form-control" placeholder="0" id="cantidad" name="cantidad"></p>
          <label for="producto">Nombre del producto:</label><p>
          <select name="producto" id="producto">
          <option value="0" selected>Seleccionar</option>
          <?php
              while ($row = $resultado->fetchArray()) {
                $existencias = $row["existencias"];
                if ($existencias > 0)
                {
                ?>
                    <option data-id="<?php print $row['id_producto']?>" value="<?php print $row['precio']?>"> <?php print $row['producto']?></option>
                    <?php
                            }
                        }
                    ?>

          ?>
          </select></p>
          <button class="cssboton" type="button" class="btn btn-primary" onclick="insertar()"> Insertar </button>
          <br>
          <br>
          <label for="carrito">Carrito:</label>
          <br>
          <br>
          <textarea class="form-control" cols="60" rows="5" id="carrito" name="carrito"></textarea>
          <br>
          <br>
          <label for="total" >Total a pagar:</label>
          <input type="number" readonly="readonly" class="form-control"  placeholder="0" id="resultado" name="resultado" value="0">
          <br>
          <br>
          <label for="pago" >Pago:</label>
          <input type="number" class="form-control"  placeholder="0" id="pago" name="pago">
          <br>
          <br>
          <button class="cssboton" type="submit" class="btn btn-info"> Cobrar </button>
          <br>
          <br>
          <button class="cssboton" type="button" class="btn btn-primary" onclick="limpiar()"> Nueva compra </button>
        </div>
      </form>
    <script language="JavaScript" type="text/javascript" src="carrito.js"></script>
	</body>
</html>
