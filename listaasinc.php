<?php
include_once "conexion.php";

$numeroControl = '';

if (isset($_POST['buscar'])) {
    $numeroControl = $_POST['numeroControl'];
}

// Consultar las asistencias por número de control
$sql = "SELECT * FROM asistencias WHERE numerocontrolfk LIKE '%$numeroControl%' ORDER BY fecha";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Búsqueda de Asistencias por Número de Control</title>
  <!-- Estilos CSS -->
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 2px solid black;
      padding: 8px;
      text-align: left;
    }
  </style>
</head>
<body style="background-color: darkgrey;">
<?php include "nav.php"; ?>
<div class="container">
<h1 class="mt-3 text-center">Búsqueda de Asistencias por Número de Control</h1>
  <form method="POST" action="">
    <label for="numeroControl">Número de Control:</label>
    <input type="text" name="numeroControl" value="<?php echo $numeroControl; ?>" >
    <button type="submit" name="buscar" style="background-color: aqua;">Buscar</button>
  </form>
  <br>
  <table>
    <tr>
      <th>ID Asistencias</th>
      <th>Número de Control</th>
      <th>Fecha</th>
      <th>Hora</th>
      <th>In/Out</th>
    </tr>
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