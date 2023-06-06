<?php
// Incluir el archivo de conexion
require_once 'conexion.php';

//Procesar el dato que contiene el nombre de la carrera y ese dato viene
// en el name del Text
$nombrecarrera=$_POST['car'];
// Creamos la sentencia SQL para insertar el dato
$sqlinsert="Insert into carreras(nombredecarrera) values ('$nombrecarrera')" ;

//Vamos a enviar esa sentencia SQL
if ($conn->query($sqlinsert)==true)
{ echo "Se guardaron los datos";}
else
{ echo "No se guardaron los datos";}

//Cerramos la conexión para que no queden conexiones abiertas
$conn->close();

header("location:altacarreras.html");
?>