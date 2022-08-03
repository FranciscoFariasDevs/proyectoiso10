<?php

include("conexion.php");
$con=conectar();

$rut_empresa=$_POST['rut_empresa'];
$nombre_Em=$_POST['nombre_Em'];
$telefono_Em=$_POST['telefono_Em'];
$giro=$_POST['giro'];
$direccion=$_POST['direccion'];

$sql="UPDATE empresam SET  nombre_Em='$nombre_Em',telefono_Em='$telefono_Em',giro='$giro',direccion='$direccion' WHERE rut_empresa='$rut_empresa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /tablaEmpresas/index.php");
    }
?>