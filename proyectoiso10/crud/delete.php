<?php

include("conexion.php");
$con=conectar();

$rut_empresa=$_GET['id'];

$sql="DELETE FROM EmpresaM  WHERE rut_empresa='$rut_empresa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empresas.php");
    }
?>
