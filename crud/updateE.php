<?php

include("conexion.php");
include("er.php");
//er();
$con=conectar();

$rut_e=$_POST['rut_e'];
$nombre_E=$_POST['nombre_E'];
$apellido_e=$_POST['apellido_e'];
$cargo=$_POST['cargo'];
$password_enc=$_POST['password_enc'];

$sql="UPDATE encargado SET rut_e='$rut_e',nombre_E='$nombre_E',apellido_e='$apellido_e',cargo='$cargo' WHERE rut_e='$rut_e'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:/proyectoiso10/Francisco-Farias-ProyectoIso1/proyectoiso10/tablaEmpresas/tablaencargados.php");
    }
    ?>