<?php
include("/xampp/htdocs/proyectoiso10/proyectoiso10/crud/conexion.php");
include("/xampp/htdocs/proyectoiso10/proyectoiso10/crud/er.php");
//er();
 $con=conectar();
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
$sql="SELECT * FROM userss WHERE  Username='$usuario'  ";
$query=mysqli_query($con,$sql);
$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:inicio");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
