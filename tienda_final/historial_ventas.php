<?php
    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from Tickets;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Historial de ventas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>id_ticket</th>
        <th>hora_venta</th>
        <th>cantidad_producto</th>
        <th>producto</th>
        <th>total_producto</th>
      </tr>
    </thead>
    <tbody>
        <?php 
                        
                        while ($row = $resultado->fetchArray())
                        {
                            
                        
                            {
                    ?>
                                <tr>
                                    <td><?php echo $row['id_ticket']?></td>
                                    <td><?php echo $row['hora_venta']?></td>
                                    <td><?php echo $row['cantidad_producto']?></td>
                                    <td><?php echo $row['producto']?></td>
                                    <td><?php echo $row['total_producto']?></td>
                                   
                                </tr> 
                     
		           
                    <?php
                            }
                        }
                       
                    ?> 
    </tbody>
  </table>
</div>

</body>
</html>
