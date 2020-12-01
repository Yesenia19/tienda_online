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
          <option value="Seleccionar">Seleccionar</option>
          <option value="24">Aceite $24</option> 
          <option value="30">Azucar $30</option>
          <option value="12">Galletas $12</option>
          <option value="15">Caja de leche $15</option>
          <option value="35">Yogurt 1lt $35</option>
          <option value="10">Sal $10</option>
          <option value="28">Cafe 200gr $28</option>
          <option value="27">Coca cola 2lts $27</option>
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
