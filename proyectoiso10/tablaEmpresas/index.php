<?php 
    include("../crud/conexion.php");
  

    $con=conectar();

    $sql="SELECT *  FROM EmpresaM";
    $query=mysqli_query($con,$sql);
?>
 
 
 <!-- head -->
  <?php include('../partes/head.php') ?>
    <!-- fin head -->

<body>
    <div class="d-flex" id="content-wrapper">
      <!-- sideBar -->
    <?php include('../partes/sidebar.php') ?>
      <!-- fin sideBar -->

        <div class="w-100">

        <!-- Navbar -->
        <?php include('../partes/nav.php') ?>
          <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

              <section class="bg-light py-3">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-9 col-md-8">
                            <h1 class="font-weight-bold mb-0">Área de mantención de instalaciones</h1>
                            <p class="lead text-muted">Seleccione que desea hacer</p>
                          </div>
                         
                      </div>
                  </div>
              </section>

              <section class=" py-3">
                <div class="contenedor">

                    
                <table id="tablaEmpresas" class="table table-responsive table-striped" >
                    <thead >
                        <tr>
                            <th>Rut Empresa</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Giro</th>
                            <th>Direccion </th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <th><?php  echo $row['rut_empresa']?></th>
                        <th><?php  echo $row['nombre_Em']?></th>
                        <th><?php  echo $row['telefono_Em']?></th>
                        <th><?php  echo $row['giro']?></th>
                        <th><?php  echo $row['direccion']?></th> 
                        <th><a href="/proyectoiso10/proyectoiso10/crud/actualizar.php?od=<?php echo $row['rut_empresa'] ?>" class="btn btn-info">Editar</a></th>
                        <th><a href="delete.php?id=<?php echo $row['rut_empresa'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                    </tr>
                <?php 
                        }
                        ?>
                    </tbody>
                </table>
                
                </div>  
              </section>
        </div>
        </div>






</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="../js/tabla.js"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
</body>

