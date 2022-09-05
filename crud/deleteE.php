<?php

include("conexion.php");
$con=conectar();

$rut_e=$_GET['id'];

$sql="DELETE FROM encargado  WHERE rut_e='$rut_e'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:/proyectoiso10/Francisco-Farias-ProyectoIso1/proyectoiso10/tablaEmpresas/tablaencargados.php");
    }
?>
