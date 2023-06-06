<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- BOOSTRAP CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <!-- Toastify CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <link rel="stylesheet" href="main.css">
</head>

<body style="background-color: darkgrey;">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="imagen1.png" width="80" height="60"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link logged-out" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Iniciar Sesion</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container p-4">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <ul class="list-group posts">
        </ul>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h3>Iniciar Sesion</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-5">
          <form id="signup-form"  Method="post">

            <label for="email">Email:</label>
            <input name="email"type="text" class="form-control mb-3" placeholder="Email" required>

            <label for="password">Password:</label>
            <input name="contrasena" type="password"  class="form-control mb-3" placeholder="Password" required>
            
            <button type="submit" class="btn btn-primary">Iniciar Sesion </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Toastify js -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script src="main.js" type="module"></script>
  
</body>
<?php
include_once 'conexion.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$usuario = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Consulta SQL para verificar el nombre de usuario y la contraseña en la tabla de usuarios
$sql = "SELECT * FROM usuarios WHERE correo = '$usuario' AND contrasena = '$contrasena'";
$result = $conn->query($sql);

// Verificar si se encontró un usuario válido
if ($result->num_rows === 1) {
    // Usuario y contraseña válidos, inicio de sesión exitoso
    echo "Inicio de sesión exitoso";
    header("location: inicio.php");
} else {
    // Usuario o contraseña incorrectos, inicio de sesión fallido
    echo "Inicio de sesión fallido";
}

// Cerrar la conexión a la base de datos
$conn->close();
}
?>

</html>