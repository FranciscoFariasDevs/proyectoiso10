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
        <?php include('../partes/nav.php'); 
         include ("validar.php");
        ?>
          <!-- Fin Navbar -->

         

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

              <section class="bg-light py-3">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-9 col-md-8">
                            <h1 class="font-weight-bold mb-0">Registro empresas prestadoras de servicios</h1>
                          </div>
                         
                      </div>
                  </div>
              </section>

            <section class="py-3">
                <div class="contenedor">            
                        <div class="row">
                                <form action="insertar.php" method="POST" class="formulario">

                                    <input type="text" class="form-control mb-3" name="rut_empresa" placeholder="Rut " id="rutt">
                                    <input type="text" class="form-control mb-3" name="nombre_Em" placeholder="Nombre  ">
                                    <input type="text" class="form-control mb-3" name="telefono_Em" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="giro" placeholder="Giro">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">

                                    <input type="submit" class="btn btn-primary">
                                </form>
                            </div>
                </div>
            </section>
        </div>
        </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
</body>

</html>