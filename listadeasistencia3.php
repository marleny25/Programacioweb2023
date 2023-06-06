<?php
include_once "conexion.php";

$fechaInicio = '2023-06-01'; // Fecha de inicio del intervalo
$fechaFin = '2023-06-30'; // Fecha de fin del intervalo

// Consultar las asistencias en el intervalo de fechas
$sql = "SELECT * FROM asistencias WHERE fecha BETWEEN '$fechaInicio' AND '$fechaFin'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asistencias en intervalo de fechas</title>
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
 
</head>
<body style="background-color: darkgrey;">
<?php include "nav.php"; ?>
<div class="container">
<h1>Asistencias en intervalo de fechas</h1>
  <table id="example">
    <thead>
    <tr>
      <th>ID Asistencias</th>
      <th>Número de Control</th>
      <th>Fecha</th>
      <th>Hora</th>
      <th>In/Out</th>
    </tr>
    </thead>
    <tbody>
    <?php
    // Mostrar los resultados en la tabla
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['idAsistencias'] . "</td>";
            echo "<td>" . $row['numerocontrolfk'] . "</td>";
            echo "<td>" . $row['fecha'] . "</td>";
            echo "<td>" . $row['hora'] . "</td>";
            echo "<td>" . $row['inoutt'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No se encontraron asistencias en el intervalo de fechas.</td></tr>";
    }
    ?>

    </tbody>
    
  </table>
</div>
  
</body>
</html>

<?php
// Cerrar la conexión a la base de datos
$conn->close();
?>
