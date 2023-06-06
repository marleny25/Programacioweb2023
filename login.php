<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    // Consultar la base de datos para verificar el usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $usuario = $result->fetch_assoc();
        if (password_verify($contrasena, $usuario['contrasena'])) {
            // Inicio de sesión exitoso, redireccionar al usuario a otra página
            header('Location: consultaalumno.php');
            exit;
        } else {
            $error = 'Contraseña incorrecta';
        }
    } else {
        $error = 'Usuario no encontrado';
    }
}

?>