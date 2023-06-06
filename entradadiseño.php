
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registro de entrada </title>
    <link rel="stylesheet" href="style3.css">

<body>
<a href="inicio.php"><i class="bi bi-arrow-left" style="font-size: 2em;"></i></a>
    <div class="reloj">

        <div><img src="Imagen1.png" alt=""></div>
        <p class="fecha"></p>
        <p class="tiempo"></p>
        <div>
            
        <form action="" method="post">
        <input type="text" name="ncontrol" placeholder="Ingresa tu numero de control"> 
        <select name="registro" >
            <option selected>SELECCIONA</option>
            <option value="entrada">ENTRADA</option>
            <option value="salida">SALIDA</option>
        </select>
        <button type="submit" name="btn" value="REGISTRAR">REGISTRAR</button>
    </form>
 
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php 
    date_default_timezone_set('America/Mexico_City');
	require_once 'conexion.php';
   if (!empty($_POST["btn"])) {
   if (!empty($_POST["ncontrol"])) {
    $num=$_POST["ncontrol"];
    $consulta=$conn->query("select count(*) as 'total' from alumno where numerocontrol='$num'");
    if ($consulta->fetch_object()->total>0) {
        $combo=$_POST["registro"];
        $fecha=date("Y-m-d");
        $hora=date("H:i:s", strtotime('-1 hour'));
    
      
        $sql=$conn->query("insert into asistencias(numerocontrolfk,fecha,hora,inoutt) values('$num','$fecha','$hora','$combo')");
        if ($sql==true) {
            echo '<div class="alert alert-success w-25 p-3" style="text-align: center;color: #000000" > REGISTRO EXITO...!!!</div>';
        } else {
           
            echo '<div class="alert alert-danger w-25 p-3" style="text-align: center;color: #000000" > ERROR...!!!</div>';
           

        }
        
    } else {
        echo '<div class="alert alert-warning w-25 p-3" style="text-align: center;color: #000000" > NUMERO DE COTROL NO EXISTE...!!!</div>';
    }
    
   } else {
    echo '<div class="alert alert-warning w-25 p-3" style="text-align: center;color: #000000" > CAMPOS VACIOS...!!!</div>';

   }
   
   }

	 ?>

