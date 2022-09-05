<?php 
    include("conexion.php");
    include("er.php");
    er();
    $con=conectar();
    $rut=$_GET['rut_e'];

$sql="SELECT * FROM encargado WHERE rut_e='$rut_e'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <h1 style="text-align:center">Editar Datos</h1>
        <title>Editar Datos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updateE.php" method="POST">
                    
                                <input type="hidden" name="rut_e" value="<?php echo $row['rut_e']  ?>">
                                <input type="text" class="form-control mb-3" name="rut_e" placeholder="Rut" value="<?php echo $row['rut_e']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_e" placeholder="Nombre" value="<?php echo $row['nombre_e']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido_e" placeholder="Apellido" value="<?php echo $row['apellido_e']  ?>">
                                <input type="text" class="form-control mb-3" name="cargo" placeholder="Cargo" value="<?php echo $row['cargo']  ?>">
                                <input type="text" class="form-control mb-3" name="password_enc" placeholder="Contraseña" value="<?php echo $row['password_enc']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar" onclick="alertita3(1)">
                    </form>
                    
                </div>
    </body>
</html>
<script src="/proyectoiso10/Francisco-Farias-ProyectoIso1/proyectoiso10/js/alertas.js"></script>