<?php

require_once 'conexion.php';
//alamacenaremos los datos que nos llegan por el metodo post 
$ncon=$_POST['ncontrol'];
$nom=$_POST['nombre'];
$ap=$_POST['apaterno'];
$am=$_POST['amaterno'];
$mai=$_POST['mail'];
$curp=$_POST['curp'];
$idcar=$_POST['select'];


//-verificar que el numero de contol no exista en la base de datos
$consulta="select *  from alumno where numerodecontrol='$ncon'"; 

$resultadodelaconsulta=$conn->query($consulta);

if($resultadodelaconsulta->num_rows>0)
{echo "ya existe un dato con ese numero de control";}
else
{ 
    //EN ESTA SESION VAMOS A REALIZAR EL INSERT DE ALUMNOS QUE NO EXITEN EN EL NUMERO CONTRO 

    $insert= "insert into alumno(numerocontrol,nombre,apellidopaterno,apellidomaterno,correo,curp,idcarrerafk) values('$ncon','$nom','$ap','$am','$mai',
    '$curp',$idcar)";
    //enviamos la consulta 

    if($conn->query($insert)==true)
    { 
        echo "se guardan los datos";
    }
    else{
        echo"se esta generando un error en el inser";
    }

}//termina if
$conn->close();
//cerrar sesion

header("location: altaalumnos.php");

?>