<?php
session_start();
echo "valor:".$_SESSION['usuario'];
if (isset($_SESSION['usuario']))
{
    echo "Existe un valor llamado usuario y contiene ".$_SESSION['usuario'];
    //Eliminar la variable de sesión con el método unset
    unset($_SESSION['usuario']);
    echo "La variable de sesión password seguirá existiendo ".$_SESSION['password'];

}
else
{echo "La variable de sesión no se ha creado";

echo "<br> La variable de sesión password seguirá existiendo ".$_SESSION['password'];
}

//Destruir la sesión
session_destroy();

?>