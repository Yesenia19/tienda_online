function insertar()
{
  var cantidad_producto= $("#cantidad").val();
  var nombre_producto = $ ("#producto option:selected").text();
  var precio_producto = $ ("#producto").val();
  var contenido_producto= $ ("#carrito").val(); 
  var total= $ ("#resultado").val(); 

  if ( cantidad_producto < 10 & cantidad_producto > 0 & precio_producto > 0 )
    {
    $("#carrito").text(contenido_producto +  "\n Cantidad: " + cantidad_producto + "\t Producto: " + nombre_producto + "\t Total: $"+ parseFloat(cantidad_producto) * parseFloat(precio_producto)+"\n");
    total_producto = (parseFloat(cantidad_producto) * parseFloat(precio_producto));
    total_final = total_producto + parseFloat(total);
    $("#resultado").val(total_final);
    }
  if ( cantidad_producto <= 0 || precio_producto <= 0 )
    {
      window.alert( "Verifica que los campos esten correctamente llenados" );
    }
  if (cantidad_producto>=10 & precio_producto>0)
    {
      window.alert ("La cantidad de productos que puedes comprar es de 1 a 9");
    }
}

function limpiar()
{
  $("#cantidad").val("");
  $("#producto").val(" ");
  $("#carrito").empty(" "); 
  $("#resultado").val("0"); 
  $("#pago").val(" ");  
}

