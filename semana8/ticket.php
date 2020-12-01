<?php
$medidaTicket = 50;
$carrito = $_POST['carrito'];
$resultado = $_POST ['resultado'];
$pago = $_POST ['pago'];
$cambio = $pago - $resultado;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" type="text/css" charset="utf-8"> 
    <meta name="viewport" content="width=device-width"/>
		<title>Ticket</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="estilos_tienda.css" rel="stylesheet" type="text/css" > 
</head>

<body>
    <form method="POST" action="tienda.php" target="_blank" name="tienda">
    <h1>Tiendita de la esquina</h1>
    <h5><?php echo date('l jS \of F Y h:i:s A'); ?></h5>
    <div class="csstamaño">
        
        <p> ............................................................................................... </p>
        <p> Productos:</p>
        <p> <?php print($carrito ); ?> </p>
        <p> Total: $<?php print($resultado); ?> </p>
        <p> Monto recibido: $<?php print($pago); ?> </p>
        <th> Cambio: $<?php print($cambio); ?> </th>
    </div>
    <p class="centrado">¡GRACIAS POR SU COMPRA!
    <br>
    <br>
    <button class="cssboton" type="submit" class="btn btn-info"> Nueva compra </button>
    <script language="JavaScript" type="text/javascript" src="carrito.js"></script>
</body>

</html>

