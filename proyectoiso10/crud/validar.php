<?php
if (empty ($_POST['rut_empresa'])){
    echo "<p Debe ingresar un RUT con su guion /p>";
} elseif (empty ($_POST['nombre_Em'])){
    echo "Debe ingresar un Nombre";  
}
elseif (is_numeric ($_POST['telefono_Em'])){
    echo "El telefono solo contiene numeros";  
}
elseif (empty ($_POST['giro'])){
    echo "Debe ingresar un giro";  
}
elseif (empty ($_POST['direccion'])){
    echo "Debe ingresar una dirección";  
}

?>