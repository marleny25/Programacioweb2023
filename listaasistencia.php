<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Añadir estilo-->    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- Añadir JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Añadir JQuery -->    
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
       $(document).ready(function () {
       $('#example').DataTable();
       });
     </script> 

    <title>Vista alumnos</title>
</head>
<body style="background-color: darkgrey;">
<?php include "nav.php"; ?>
    <div class="container">
        <h1>Registro de Asistencias</h1>
    <table id="example">
        <thead>
        <tr> <th>Id</th> <th>Numero de control</th> <th>Fecha</th><th>Hora</th> <th>In/Out</th></tr>
        </thead>
        <tbody>
        <?php
         require_once 'conexion.php';
          ////creamos niestra secuencia SQL 
        $sql="select idAsistencias,numerocontrolfk,	fecha ,hora,inoutt from asistencias;";
        //ejecutar consulta
        $consulta=$conn->query($sql);
        //vamos a ver los resultados 
        while ( $fila=$consulta->fetch_assoc()) {
           echo "<tr><td>";
           echo $fila['idAsistencias'];

           echo "</td><td>";
           echo $fila['numerocontrolfk'];

           echo "</td><td>";
           echo $fila['fecha'];

           echo "</td><td>";
           echo $fila['hora'];

           echo "</td><td>";
           echo $fila['inoutt'];

          
        }
       
     
          ?> 
          </tbody>
    </table>
    </div>
    
</body>
</html>
