<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ITSSNA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio.php"><i class="bi bi-house-door-fill"></i> Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="altaalumnos.php"><i class="bi bi-clipboard-plus"></i> Registrar alumnos </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consultaalumno.php"> <i class="bi bi-person-lines-fill"></i> Lista de alumnos</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="entradadiseño.php"><i class="bi bi-person-plus-fill"></i> Registro de Asistencias </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="listaasistencia.php"><i class="bi bi-clipboard"> </i>  Registro de Asistencias </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-calendar-date" style="font-size: 1em;"></i> 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"> Intervalo de fechas </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="listadeasistencia2.php">2023-05-01/2023-05-31</a></li>
            <li><a class="dropdown-item" href="listadeasistencia3.php">2023-06-01/2023-06-30</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="listaasinc.php"> <i class="bi bi-search"></i> Número de control</a>
        </li>
        <li>
        <a class="nav-link" href="salir.php"> <i class="bi bi-x-circle"></i> Cerrar Sesion</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>