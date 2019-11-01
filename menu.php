<?php
session_start();
if(!isset($_SESSION['user_session'])){
  header("Location: index.php");
}
include_once 'class/DBconfig.php';
$stmt = $db_con->prepare("SELECT * FROM usuarios WHERE Id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));

$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App Favicon icon -->
        <link rel="shortcut icon" href="img/icon.png">
        <!-- App Title -->
        <title>AIOS - Home </title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>
<!-- Navigation Bar-->
        <header id="topnav">
            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="menu.php"><i class="md md-dashboard"></i>Home - Mangas</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="mangas.php">Mangas</a>
                                    </li>
                                    <li>
                                        <a href="paginas.php">Paginas de Mangas</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-submenu"></li>                         
                        </ul>
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="#"><i class="md md-account-box"></i>Numero Telefonicos</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="numeros_tel.php">Listado</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"></li>                         
                        </ul>
                        

                      
                        <ul class="navigation-menu" style="float: right;">
                            <li class="has-submenu">
                                <a href="#"><i class="md md-people"></i>Log Out</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="class/logout.php">Cerrar Sesion</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                  
                        <!-- End navigation menu        -->
                    </div>
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

        <div class="wrapper">
            <div class="container">
                <input style="display: none;" type="text" name="user" id="user" value="<?php echo$row['NombreCompleto']; ?>">
          <h3 class="text-default">
                Estatus de los mangas registrados.   
           </h3>
                     
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md  md-play-circle-outline text-success"></i>
                            <h2 class="m-0 text-dark counter font-600">
                                <span data-plugin="" id="publicandose"></span>
                            </h2>
                            <div class="text-muted m-t-5">Publicandose</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-pause-circle-outline text-primary"></i>
                            <h2 class="m-0 text-dark counter font-600"><span data-plugin="" id="pausado"></span></h2>
                            <div class="text-muted m-t-5">Pausados</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-stop text-warning"></i>
                            <h2 class="m-0 text-dark counter font-600"><span data-plugin="" id="detenido"></span></h2>
                            <div class="text-muted m-t-5">Detenidos</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-visibility-off text-danger"></i>
                            <h2 class="m-0 text-dark counter font-600"><span data-plugin="" id="final"></span></h2>
                            <div class="text-muted m-t-5">Finalizados</div>
                        </div>
                    </div>
                </div>
  
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="text-default">
                            Tipos de Mangas registrados.   
                        </h3>
                        <div class="card-box widget-inline">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="widget-inline-box text-center">
                                        <h3><i class="text-primary md md-sd-storage"></i> <b data-plugin="" id="mangas"></b></h3>
                                        <h4 class="text-muted">TOTAL DE MANGAS</h4>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <div class="widget-inline-box text-center">
                                        <h3><i class="text-success md md-sd-storage"></i> <b data-plugin="" id="manhwas"></b></h3>
                                        <h4 class="text-muted">TOTAL DE MANHWAS</h4>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <div class="widget-inline-box text-center">
                                        <h3><i class="text-inverse md md-sd-storage"></i> <b data-plugin="" id="manhuas"></b></h3>
                                        <h4 class="text-muted">TOTAL DE MANHUAS</h4>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <div class="widget-inline-box text-center b-0">
                                        <h3><i class="text-danger md md-sd-storage"></i> <b data-plugin="" id="novelas"></b></h3>
                                        <h4 class="text-muted">TOTAL DE NOVELAS</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                © 2019. All rights reserved.
                            </div>
                            <div class="col-xs-6">
                                <ul class="pull-right list-inline m-b-0">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div>
        </div>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Counterup  -->
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Morris chart js -->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard 4 js -->
	      <script src="assets/pages/jquery.dashboard_4.js"></script>

        <!-- App core js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        
        <script src="assets/plugins/notifyjs/js/notify.js"></script>
        <script src="assets/plugins/notifications/notify-metro.js"></script>

        <script src="js/menu.js"></script>

        <script type="text/javascript">
          
            
          $(document).ready(function () {
            var user = $('#user').val();
             $.Notification.autoHideNotify(
                'black', 
                'top right', 
                'Bienvenido a All In One System',
                'Usuario: ' + user
              );
          });
        </script>
    </body>
</html>