<?php
 require_once 'conexion.php';

$numeroControl = '';
$fechaInicio = '';
$fechaFin = '';

if (isset($_POST['buscar'])) {
    $numeroControl = $_POST['numeroControl'];
    $fechaInicio = $_POST['fechaInicio'];
    $fechaFin = $_POST['fechaFin'];

    // Consultar las asistencias por número de control y rango de fechas
    $sql = "SELECT * FROM asistencias WHERE numerocontrolfk = '$numeroControl' AND fecha BETWEEN '$fechaInicio' AND '$fechaFin' ORDER BY fecha";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Búsqueda de Asistencias</title>
  <!-- Estilos CSS -->
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }
  </style>
</head>
<body>
<?php include "nav.php"; ?>
  <div class="container">
  <h1>Búsqueda de Asistencias</h1>
  <form method="POST" action="">
    <label for="numeroControl">Número de Control:</label>
    <input type="text" name="numeroControl" value="<?php echo $numeroControl; ?>">
    <br>
    <label for="fechaInicio">Fecha de Inicio:</label>
    <input type="date" name="fechaInicio" value="<?php echo $fechaInicio; ?>">
    <br>
    <label for="fechaFin">Fecha de Fin:</label>
    <input type="date" name="fechaFin" value="<?php echo $fechaFin; ?>">
    <br>
    <button type="submit" name="buscar">Buscar</button>
  </form>
  <table >
  <?php
  // Mostrar la tabla de resultados si se realizó la búsqueda
  if (isset($_POST['buscar']) && $result->num_rows > 0) {
      echo "<h2>Resultados de la búsqueda:</h2>";
      echo "<table>";
      echo "<tr><th>ID Asistencias</th><th>Número de Control</th><th>Fecha</th><th>Hora</th><th>In/Out</th></tr>";
      while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row['idAsistencias'] . "</td>";
          echo "<td>" . $row['numerocontrolfk'] . "</td>";
          echo "<td>" . $row['fecha'] . "</td>";
          echo "<td>" . $row['hora'] . "</td>";
          echo "<td>" . $row['inoutt'] . "</td";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No se encontraron asistencias para el número de control $numeroControl.</td></tr>";
    }
    ?>
  </table>
</div>
 
</body>
</html>

<?php
// Cerrar la conexión a la base de datos
$conn->close();
?>