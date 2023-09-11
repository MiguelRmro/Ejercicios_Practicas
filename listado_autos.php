
<?php


$conn = pg_connect("host=localhost port=5433 user=postgres password=5672 dbname=postgres");
if (!$conn){
  die("PostgreSQL connection failed");
 }



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Listado de autos</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">

  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <link rel="stylesheet" href="lib/xchart/xcharts.css">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">



  <script src="lib/chart-master/Chart.js"></script>



</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="" class="logo"><b><span>DESA</span>RROLLO<span> WEB</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
         

    
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
      
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>

    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->


   
   
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="img/Romero.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered"> Miguel Romero</h5>
          <h5 class="centered">
        
          
          
          
    
        
        </h5> 
        
     



<li class="mt">
<a href="cliente.php">
  <i class="fa fa-user"></i>
  <span>Cliente</span>
  </a>

</li>


<li class="mt">
<a href="auto.php">
  <i class="fa fa-car"></i>
  <span>Auto</span>
  </a>
</li>

<li class="mt">
<a href="auto2.php">
  <i class="fa fa-car"></i>
  <span>Auto 2</span>
  </a>
</li>

<li class="mt">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Tablas</span>
              </a>
            <ul class="sub">
              <li class=active>
                <a href="listado_clientes.php">Listado de clientes</a>
              </li>
        
              <li>
                <a href="listado_autos.php">Listado de autos</a>
              </li>
            </ul>
          </li>

        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    
<!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-car"></i> Listado de autos</h3>
      
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4>Autos</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-car"></i> marca</th>
                    <th><i class="fa fa-desktop"></i> placa</th>
                    <th><i class="fa fa-calendar"></i> año</th>
                    <th><i class=" fa fa-plane"></i> país</th>
                    <th><i class=" fa fa-eye"></i> Ver</th>
                    <th><i class=" fa fa-pencil"></i> Editar</th>
                    <th><i class=" fa fa-trash-o"></i> Borrar</th>
                  </tr>
                </thead>
                <tbody>

                <!-- Aquí estará el contenido de la tabla -->

                <?php
               $query = "select * from automovil";   



              $result = pg_query($conn, $query) or die('ERROR : ' . pg_last_error());
              $id_automovil='';
              $marca= '';
              $placa='';
              $año='';
              $país='';
  
              
   while ($row = pg_fetch_row($result)) {
    $id_automovil=$row[0];
    $marca= $row[1];
    $placa=$row[2];
    $año=$row[3];
    $país=$row[4];
   
          echo '
  
                    <tr>
                      <td>';
                          echo  $marca;
                          
         echo '            </td>';
  
         echo             '<td>'; echo $placa; echo '</td>';
         echo             '<td>'; echo $año; echo '</td>';
         echo             '<td>'; echo $país; echo '</td>';
          echo            '<td>';
  
  
           echo          ' <form action="ver_automovil.php" method="get"> ';
  echo ' <input type="hidden" name="id_automovil" value=';echo $id_automovil; echo '><button class="btn btn-success btn-xs"><i class="fa fa-eye"></i></button>';
  echo ' </form>';
  echo '</td>';
  
  
  echo ' <td>';
  echo '<form action="editar_automovil.php" method="get">';
  echo ' <input type="hidden" name="id_automovil" value=';echo $id_automovil;  echo '><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>';
  echo '</form>';;
  echo '</td>';
  
  
  echo '<td>';
  echo '<form action="eliminar_automovil.php" method="get">';
  echo '<input type="hidden" name="id_automovil" value='; echo $id_automovil; echo '> <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>';
  echo '</form>';
  echo '</td>';
  
  
  }
  


?>
                
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <!--custom switch-->
  <script src="lib/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="lib/jquery.tagsinput.js"></script>

  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="lib/form-component.js"></script>
  <script type="text/javascript" src="js/md5.min.js"></script>

  <script>
 
</script>


</body>

</html>
