<?php
require_once('config.php');
$id    		= $_REQUEST['id']; 

$sqlDeleteEvento = ("DELETE FROM Mantencion WHERE  cod_man='" .$id. "'");
$resultProd = mysqli_query($con, $sqlDeleteEvento);

?>
  