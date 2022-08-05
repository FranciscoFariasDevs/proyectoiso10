<?php 
    include("conexion.php");
    include("er.php");
    er();
    $con=conectar();
    $rut=$_GET['rut_empresa'];

$sql="SELECT * FROM empresam WHERE rut_empresa='$rut'";
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
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="rut_empresa" value="<?php echo $row['rut_empresa']  ?>">
                                <input type="text" class="form-control mb-3" name="rut_empresa" placeholder="Rut" value="<?php echo $row['rut_empresa']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_Em" placeholder="Nombre" value="<?php echo $row['nombre_Em']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono_Em" placeholder="Telefono" value="<?php echo $row['telefono_Em']  ?>">
                                <input type="text" class="form-control mb-3" name="giro" placeholder="Giro" value="<?php echo $row['giro']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
