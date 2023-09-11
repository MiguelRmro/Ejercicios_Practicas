
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
  <title>Registro de Formulario </title>

  <link href="img/favicon.png" rel="icon">

  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <link rel="stylesheet" href="lib/xchart/xcharts.css">

  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">



  <script src="lib/chart-master/Chart.js"></script>



</head>

<body>
  <section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <a href="" class="logo"><b><span>DESA</span>RROLLO<span> WEB</span></b></a>
      <div class="nav notify-row" id="top_menu">
        <ul class="nav top-menu">
         

    
      
        </ul>
      </div>

    </header>


   
   
    <aside>
      <div id="sidebar" class="nav-collapse ">
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
  <ul class="sub">
    <li>
     <a href="listado_clientes.php">Listado de clientes</a>
    </li>
  </ul>
 </li>

<li class="mt">
<a href="auto.php">
  <i class="fa fa-car"></i>
  <span>Auto</span>
  </a>
  <ul class="sub">
    <li>
      <a href="listado_autos.php"> Listado Autos</a>
    </li>
  </ul>
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
              <li>
                <a href="listado_clientes.php">Listado de clientes</a>
              </li>
        
              <li>
                <a href="listado_autos.php">Listado de autos</a>
              </li>
            </ul>
          </li>
        </ul>

<li class="mt">
<a class="active" href="formulario_complejo.php">
  <i class="fa fa-user"></i>
  <span>Formulario Complejo</span>
</a>
</li>
      </div>
    </aside>


    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-car"></i> Formulario Complejo</h3>

        <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Formulario Complejo</h4>

<!--  en cada table se cambia el action y el method es post para que no aparezca os lados en el url y si colocamos el metodo get nos puede servir para ver que dato se estan enviando y cuales no -->
  <form role="form" class="form-horizontal" method="POST" action="formulario_complejo_database.php">
    <div class="form-group">
        <label class="col-lg-2 control-label">                  <i class="fa fa-user"></i>  Nombre </label>
        <div class="col-lg-8">
        <input type="text" placeholder="Insertar Nombre" name="nombre" id="nombre" class="form-control" value="" required>
        </div>
       </div>

       <div class="form-group">
        <label class="col-lg-2 control-label">                  <i class="fa fa-envelope"></i>  Email </label>
        <div class="col-lg-8">
        <input type="email" placeholder=" insertar Email" name="email" id="email" class="form-control" value="" required>
        </div>
       </div>

       <div class="form-group">
        <label class="col-lg-2 control-label">                  <i class="fa fa-lock"></i>  Contraseña </label>
        <div class="col-lg-8">
        <input type="password" placeholder="Insertar Contraseña " name="contraseña" id="contraseña" class="form-control" value="" required>
        </div>
       </div>


       <div class="form-group">
        <label class="col-lg-2 control-label">                  <i class="fa fa-archive"></i>  Estado Civil </label>
        <div class="col-lg-8">
        <select class="form-control" name="estadocivil" id="estadocivil">
                  <option>soltero</option>
                  <option>casado</option>
                  <option>Viudo </option>
                  <option>Divorciado</option>
                </select>
       </div>
       </div>

       <div class="form-group">
        <label class="col-lg-2 control-label">                  <i class="fa fa-file"></i>  Url de imagen </label>
        <div class="col-lg-8">
        <input type="url" placeholder="Insertar URL de imagen" name="urlimg" id="urlimg" class="form-control" value="" required>
        </div>
       </div>

       <div class="form-group">
        <label class="col-lg-2 control-label">                  <i class="fa fa-calendar"></i>  Fecha de nacimiento </label>
        <div class="col-lg-8">
        <input type="date" placeholder="Seleccionar fecha de nacimiento" name="fechanac" id="fechanac" class="form-control" value="" required>
       </div>
        </div>


        
       <div class="form-group">
        <label class="col-lg-2 control-label">                  <i class="fa fa-plane"></i>  ¿Eres Guatemalteco? </label>
        <div class="col-lg-8">
        <input type="checkbox" style="width: 20px" class="checkbox form-control" id="gt" name="gt" />
        </div>
       </div>


       <!--

       <div class="form-group">
        <label class="col-lg-2 control-label">                  <i class="fa fa-comments"></i>  Comentario </label>
        <textarea class="col-lg-8" name="comentario" id="comentario" placeholder="Ingrese un Comentario" value="" required></textarea>
        </div>
-->


        <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2"> <i class="fa fa-comments"> ingresa un comentario  </i></label>
                    <div class="col-lg-8">
                      <textarea class="form-control " id="comentario" name="comentario" required></textarea>
                    </div>
                  </div>


       
                  <!--
       <div class="form-group">
       <label class="col-lg-2 control-label">
        <div class="col-lg-8">                  <i class="fa fa-plane"></i>  ¿Eres guatemalteco? </label>
        <input type="checkbox" style="width: 20px" class="checkbox form-control" id="gt" name="gt" />
       </div>
       </div>
-->



          <br><br><br><br>
       <div class="form-group">
        <div class="col-lg-offset-2 col-lg-12">
        <button class="btn btn-theme" type="submit" name="">Registrar Cliente</button>
        </div>
        </div>
  </form>


                 
                      </div>


                   


          </div>


      

      </section>
    </section>

  </section>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/common-scripts.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/bootstrap-switch.js"></script>
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
