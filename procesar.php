<html>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","proyecto") or
 die("Problemas con la conexión");
mysqli_query($conexion,"insert into productos(modelo,tipo,precio,cantidad_disponible,socket,chipset,capacidad,velocidad,vram) values 
 ('$_REQUEST[modelo]','$_REQUEST[tipo]','$_REQUEST[precio]','$_REQUEST[cantidad_disponible]','$_REQUEST[cantidad_disponible]','$_REQUEST[socket]','$_REQUEST[chipset]','$_REQUEST[capacidad]','$_REQUEST[velocidad])','$_REQUEST[vram]")
 or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);
echo "Se ingreso el producto.";
?>
</body>
</html>