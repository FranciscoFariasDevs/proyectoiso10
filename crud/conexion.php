<?php
function conectar(){
    $host="localhost";
    $user="id19376390_root";
    $pass="Faria$$$2304";

    $bd="id19376390_mantencion";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
