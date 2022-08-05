<?php 
    include("../crud/conexion.php");
     include("../crud/er.php");
  
    er();
    $con=conectar();

    $sql="SELECT *  FROM encargado";
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

                    
                <table id="tablae" class="table table-responsive table-striped" >
                    <thead >
                        <tr>
                            <th>Rut Encargado</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cargo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                        while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <th><?php  echo $row['rut_e']?></th>
                        <th><?php  echo $row['nombre_e']?></th>
                        <th><?php  echo $row['apellido_e']?></th>
                        <th><?php  echo $row['cargo']?></th>
                      
                        <th><a href="/proyectoiso10/proyectoiso10/crud/actualizarE.php?id=<?php echo $row['rut_e'] ?>" class="btn btn-info">Editar</a></th>
                        <th><a href="/proyectoiso10/proyectoiso10/crud/deleteE.php?id=<?php echo $row['rut_e'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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

