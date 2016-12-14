<!DOCTYPE html>

<html lang="en">
<head>
  <?php
    include ('componentes/head.php')
    ?>
</head>
<body class="corporate">

    <!-- BEGIN TOP BAR -->
    <?php
      include ('componentes/menu.php')
  ?>


    <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Foro Nacional De Software Libre</h1>
            <div class="content-page">
              <div class="row">
                <!-- BEGIN SERVICE BLOCKS -->
                <div class="col-md-7">
                  <div class="row margin-bottom-20">
                    <div class="col-md-6">
                      <div class="service-box-v1">
                        <div><a href="fnsl/conferencias.php"><i class="fa fa-linux"></i></a></div>
                        <h2>Conferencias</h2>
                        <p></p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="service-box-v1">
                        <div><a href="fnsl/talleres.php"><i class="fa fa-gears  color-grey"></i></a></div>
                        <h2>Talleres</h2>
                        <p></p>
                      </div>
                    </div>
                  </div>
                  <div class="row margin-bottom-20">
                    <div class="col-md-6">
                      <div class="service-box-v1">
                        <div><a href="fnsl/registro.php"><i class="fa fa-users color-grey"></i></a></div>
                        <h2>Registro</h2>
                        <p></p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="service-box-v1">
                        <div><a href="fnsl/horarios.php"><i class="fa fa-calendar color-grey"></i></a></div>
                        <h2>Horarios</h2>
                        <p></p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END SERVICE BLOCKS -->

                <!-- BEGIN VIDEO AND TESTIMONIALS -->
                <div class="col-md-5">
                  <!-- BEGIN VIDEO -->

                  <img height="270" allowfullscreen="" style="width:100%; border:0" src="assets/img/fnsl2016.jpg" class="margin-bottom-10"></img>


              <!-- END VIDEO -->

                <!-- BEGIN TESTIMONIALS -->
                <div class="testimonials-v1 testimonials-v1-another-color">
                  <h2>Evento</h2>
                  <div id="myCarousel1" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                      <div class="active item">
                        <blockquote><p>

                          La Universidad Politécnica de Zacatecas y el Consejo Zacatecano de Ciencia, Tecnología e Innovación a través del Laboratorio de Software Libre (LABSOL) llevará a cabo el 20 y 21 de octubre el Foro Nacional de Software Libre 2016 con el objetivo de impulsar en los jóvenes zacatecanos el Emprendimiento y el Desarrollo Tecnológico
                        </p></blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END TESTIMONIALS -->
                </div>
                <!-- END BEGIN VIDEO AND TESTIMONIALS -->
              </div>

            </div>
          </div>
        </oiv>
      </div>
    </div>

    <!-- BEGIN PRE-FOOTER -->
    <?php
      include ('componentes/footer.php')
  ?>

</body>
<!-- END BODY -->
</html>