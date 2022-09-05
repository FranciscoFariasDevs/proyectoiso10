<?php
include("conexion.php");
include("er.php");
//er();
$con=conectar();


  //$aErrores = array();
  $aMensajes = array();
  $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÖÏÜàèìòùÀÈÌÒÙ\s]+$/";
 if( !empty($_POST) )
 {
   
    
      //if( isset($_POST['rut_empresa']) && isset($_POST['nombre_Em']) && isset($_POST['telefono_Em']) && isset($_POST['giro']) && isset($_POST['direccion']) )
    // {
        
         // if( empty($_POST['nombre_em']) ){
           //  $aErrores[] = "Debe especificar el nombre";} else{ 
             //( empty($_POST['rut_empresa']));}
             //$aErrores[] = "Debe especificar el rut de la empresa";
             //if( empty($_POST['telefono_em'])) {
             //$aErrores[] = "Debe especificar el telefono";}
             
             //if( empty($_POST['direccion']) )
             //$aErrores[] = "Debe especificar una direccion";    }
         //else
         //{
             
           //   if( preg_match($patron_texto, $_POST['nombre_Em']) )
             //    $aMensajes[] = "Nombre: [".$_POST['nombre_Em']."]";
             //else
               //  $aErrores[] = "El nombre sólo puede contener letras y espacios";
         }
         // giro:
         //if( empty($_POST['giro']) )
           //  $aErrores[] = "Debe especificar giro";
         //else
         //{
             
           //  if( preg_match($patron_texto, $_POST['giro']) )
             //    $aMensajes[] = "Apellidos: [".$_POST['giro']."]";
             //else
               //  $aErrores[] = "El giro sólo pueden contener letras y espacios";
         //}
         // telefono:
         //if( (isset($_POST['telefono_em']) ) && (!empty($_POST['telefono_em'])) )
         {
           //  if( is_numeric($_POST['telefono_em']) )
             //    $aMensajes[] ="Telefono: [".$_POST['telefono_em']."]";
             //else
               //  $aErrores[] = "El campo telefono debe contener  números.";
         }
        
        // if( empty($_POST['direccion']) )
          //   $aMensajes[] = "Debe ingresar una dirección";
         //}
     
     //else
     //{
       //  echo "<p>No se han especificado todos los datos requeridos.</p>";
     //}
      //if( count($aErrores) > 0 )
     //{
       //  echo "<p>ERRORES ENCONTRADOS:</p>";
         //for( $contador=0; $contador < count($aErrores); $contador++ )
           //  echo $aErrores[$contador]."<br/>";
   //  }
     //else
     //{
       //  
         //for( $contador=0; $contador < count($aMensajes); $contador++ )
           //  echo $aMensajes[$contador]."<br/>";
    // }
 

 //echo "<p><a href='/proyectoiso10/tablaEmpresas/index.php'>Haz clic aquí para volver al formulario</a></p>";



$rut_e=$_POST['rut_e'];
$nombre_e=$_POST['nombre_e'];
$apellido_e=$_POST['apellido_e'];
$cargo=$_POST['cargo'];
$password_enc=$_POST['password_enc'];





$sql="INSERT INTO encargado VALUES('$rut_e','$nombre_e','$apellido_e','$cargo','$password_enc')";
$query= mysqli_query($con,$sql);


if($query){
    Header("Location: /Francisco-Farias-ProyectoIso1/proyectoiso10/tablaEmpresas/tablaencargados.php");
    
}else {
}
?>


