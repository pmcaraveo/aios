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
        <title>AIOS - Paginas</title>

        <link href="assets/plugins/custombox/css/custombox.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">
        
        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

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

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
      
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-12">

                        <div class="card-box table-responsive">
                            <div class="btn-group pull-right m-t-15">
                              <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light"  data-toggle="modal" data-target="#modalGuardar" >Agregar Nuevo Registro 
                              </button>
                              <!-- data-target=".bs-example-modal-lg" -->
                              <br>
                              <br>
                            </div>
                            <br>
                            <br>
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                      <th>Id</th>
                                      <th>Nombre</th>
                                      <th>Link</th>
                                      <th>Detalles</th>
                                      <th>Opciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>UnOrdinary</td>
                                      <td>155</td>
                                      <td>
                                        <span class="label label-success">Publicandose</span>
                                        <span class="label label-primary">Pausado</span>
                                        <span class="label label-warning">Detenido</span>
                                        <span class="label label-danger">Finalizado</span>
                                      </td>
                                      <td>www.fmofans.com</td>
                                      <td>
                                        <button class="btn btn-icon waves-effect waves-light btn-warning"> 
                                          <i class="fa fa-wrench"></i> 
                                        </button>
                                         <button class="btn btn-icon waves-effect waves-light btn-danger"> 
                                          <i class="fa fa-remove"></i> 
                                        </button>
                                      </td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

               <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="modalGuardar">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h4 class="modal-title" id="myLargeModalLabel">Formulario para Guardar</h4>
                      </div>
                      <div class="modal-body" style="text-align: center;">
                         <div class="row" >
                           <div class="col-md-11" >
                                    <form class="form-horizontal" role="form" id="frmSave" method="post" name="frmSave">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nombre del Manga:</label>
                                            <div class="col-md-10">
                                                 <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Ultimo Capitulo: </label>
                                            <div class="col-md-10">
                                                 <input type="number" id="capitulo" name="capitulo" class="form-control" placeholder="120">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Estatus: </label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="estatus" name="estatus" >
                                                    <option  >seleccionar...</option>
                                                    <hr>
                                                    <option value="Publicandose"> &nbsp; --  Publicandose</option>
                                                    <option value="Pausado"> &nbsp; --  Pausado</option>
                                                    <option value="Detenido"> &nbsp; --  Detenido</option>
                                                    <option value="Finalizado"> &nbsp; --  Finalizado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tipo: </label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="tipo" name="tipo">
                                                    <option>seleccionar...</option>
                                                    <hr>
                                                    <option value="Manga"> &nbsp; --  Manga</option>
                                                    <option value="Manhua"> &nbsp; --  Manhua</option>
                                                    <option value="Manhwa"> &nbsp; --  Manhwa</option>
                                                    <option value="Novela"> &nbsp; --  Novela</option>
                                                </select>    
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Link del manga: </label>
                                            <div class="col-md-10">
                                                 <input type="text" id="link" name="link" class="form-control" placeholder="https://www.tmofans.com">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Detalles:</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="3" placeholder="Detalles del manga..." id="detalles" name="detalles"></textarea>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="form-group">
                                            <button type="reset" class="btn btn-warning waves-effect waves-light w-xs">Limpiar</button>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light w-sm" id="btnGuardar" name="btnGuardar"  data-dismiss="modal">Aceptar</button>
                                    </form>
                                </div>
                            </div>    
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


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

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;" id="modalEditar">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h4 class="modal-title" id="myLargeModalLabel">Formulario para Editar</h4>
                      </div>
                      <div class="modal-body" style="text-align: center;">
                         <div class="row" >
                           <div class="col-md-11" >
                                    <form class="form-horizontal" role="form" id="frmEditar" method="post" name="frmEditar">
                                      <input type="text" id="Id" name="Id" class="form-control">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nombre del Manga:</label>
                                            <div class="col-md-10">
                                                 <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="Nombre">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Ultimo Capitulo: </label>
                                            <div class="col-md-10">
                                                 <input type="number" id="Capitulo" name="Capitulo" class="form-control" placeholder="120">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Estatus: </label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="Estatus" name="Estatus" >
                                                    <option  >seleccionar...</option>
                                                    <hr>
                                                    <option value="Publicandose"> &nbsp; --  Publicandose</option>
                                                    <option value="Pausado"> &nbsp; --  Pausado</option>
                                                    <option value="Detenido"> &nbsp; --  Detenido</option>
                                                    <option value="Finalizado"> &nbsp; --  Finalizado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tipo: </label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="Tipo" name="Tipo">
                                                    <option>seleccionar...</option>
                                                    <hr>
                                                    <option value="Manga"> &nbsp; --  Manga</option>
                                                    <option value="Manhua"> &nbsp; --  Manhua</option>
                                                    <option value="Manhwa"> &nbsp; --  Manhwa</option>
                                                    <option value="Novela"> &nbsp; --  Novela</option>
                                                </select>    
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Link del manga: </label>
                                            <div class="col-md-10">
                                                 <input type="text" id="Link" name="Link" class="form-control" placeholder="https://www.tmofans.com">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Detalles:</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="3" placeholder="Detalles del manga..." id="Detalles" name="Detalles"></textarea>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="form-group">

                                            <button type="submit" class="btn btn-primary waves-effect waves-light w-sm" id="btnActualizar" name="btnActualizar"  data-dismiss="modal">Aceptar</button>
                                    </form>
                                </div>
                            </div>    
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->



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

        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <script src="assets/pages/datatables.init.js"></script>

        <!-- App core js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script src="assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="assets/plugins/custombox/js/legacy.min.js"></script>
        <script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
        <script src="assets/pages/jquery.sweet-alert.init.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
        <script src="js/paginas.js" type="text/javascript"></script>


    </body>
</html>