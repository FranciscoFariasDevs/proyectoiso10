<?php
include("conexion.php");
include("er.php");
er();
$con=conectar();


  //$aErrores = array();
  $aMensajes = array();
  $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÖÏÜàèìòùÀÈÌÒÙ\s]+$/";
 /*if( !empty($_POST) )
 {
     echo "FORMULARIO RECIBIDO:<br/>";
     echo "====================<p/>";
     echo "<hr/>";
    
      if( isset($_POST['rut_empresa']) && isset($_POST['nombre_Em']) && isset($_POST['telefono_Em']) && isset($_POST['giro']) && isset($_POST['direccion']) )
     {
        
          if( empty($_POST['nombre_em']) ){
             $aErrores[] = "Debe especificar el nombre";} else{ 
             ( empty($_POST['rut_empresa']));}
             $aErrores[] = "Debe especificar el rut de la empresa";
             if( empty($_POST['telefono_em'])) {
             $aErrores[] = "Debe especificar el telefono";}
             
             if( empty($_POST['direccion']) )
             $aErrores[] = "Debe especificar una direccion";    }
         else
         {
             
              if( preg_match($patron_texto, $_POST['nombre_Em']) )
                 $aMensajes[] = "Nombre: [".$_POST['nombre_Em']."]";
             else
                 $aErrores[] = "El nombre sólo puede contener letras y espacios";
         }
          giro:
         if( empty($_POST['giro']) )
             $aErrores[] = "Debe especificar giro";
         else
         {
             
             if( preg_match($patron_texto, $_POST['giro']) )
                 $aMensajes[] = "Apellidos: [".$_POST['giro']."]";
             else
                 $aErrores[] = "El giro sólo pueden contener letras y espacios";
         }
          telefono:
         if( (isset($_POST['telefono_em']) ) && (!empty($_POST['telefono_em'])) )
         {
             if( is_numeric($_POST['telefono_em']) )
                 $aMensajes[] ="Telefono: [".$_POST['telefono_em']."]";
             else
                 $aErrores[] = "El campo telefono debe contener  números.";
         }
        
         if( empty($_POST['direccion']) )
             $aMensajes[] = "Debe ingresar una dirección";
         }
     
     else
     {
         echo "<p>No se han especificado todos los datos requeridos.</p>";
     }
      if( count($aErrores) > 0 )
     {
         echo "<p>ERRORES ENCONTRADOS:</p>";
         for( $contador=0; $contador < count($aErrores); $contador++ )
             echo $aErrores[$contador]."<br/>";
     }
     else
     {
         
         for( $contador=0; $contador < count($aMensajes); $contador++ )
             echo $aMensajes[$contador]."<br/>";/*
     }*/
 

 echo "<p><a href='/tablaEmpresas/index.php'>Haz clic aquí para volver al formulario</a></p>";



$rut_empresa=$_POST['rut_empresa'];
$nombre_Em=$_POST['nombre_Em'];
$telefono_Em=$_POST['telefono_Em'];
$giro=$_POST['giro'];
$direccion=$_POST['direccion'];





$sql="INSERT INTO EmpresaM VALUES('$rut_empresa','$nombre_Em','$telefono_Em','$giro','$direccion')";
$query= mysqli_query($con,$sql);


if($query){
    Header("Location:tablaEmpresas/index.php");
    
}else {
}
?>




