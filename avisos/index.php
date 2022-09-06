<?php 
    include("../crud/conexion.php");
  

    $con=conectar();

    $sql="SELECT *  FROM mantencion Where estado <> 'realizada'" ;
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
                            <h1 class="font-weight-bold mb-0">Mantenciones activas</h1>
                            
                          </div>
                         
                      </div>
                  </div>
              </section>

              <section class=" py-3">
                <div class="contenedor">

                    
                <table id="tablaEmpresas" class="table table-responsive table-striped"  >
                    <thead >
                        <tr>
                            <th>Codigo</th> 
                            <th>Tipo</th>
                            <th>Nombre</th>
                            <th>Observacion</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Final </th>
                            <th>Empresa</th>
                            <th>Encargado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <th><?php  echo $row['cod_man']?></th>
                        <th><?php  echo $row['tipo_man']?></th>
                        <th><?php  echo $row['estado']?></th>
                        <th><?php  echo $row['observacion']?></th>
                        <th><?php  echo $row['fecha_inicio']?></th> 
                        <th><?php  echo $row['fecha_fin']?></th> 
                        <th><?php  echo $row['Empresa']?></th> 
                        <th><?php  echo $row['Encargado']?></th> 
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

<script src="/proyectoiso10/Francisco-Farias-ProyectoIso1/proyectoiso10/js/alertas.js"></script>