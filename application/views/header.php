<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="Marlon" content="Paramento" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.png" type="image/x-icon"/>
<!-- Stylesheets ===== -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/simple-sidebar.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" />
<!-- External JavaScripts ======= -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<title>ERP</title>
 </head>
   <body>

   	<!-- Header == -->
	   <header id="header" class="full-header dark">
       </header><!-- #header end -->

 <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="inicio">
                       <img class="img-responsive logo-left" src="<?php echo base_url();?>assets/img/logo.png" alt="">
                    </a>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Control</a>
                    <ul>
                       <li><a href="R1">R1 Resumen</a></li>
                       <li><a href="#">R2 Resumen Ventas</a></li>
                       <li><a href="#">R3 Resumen Compras</a></li>
                       <li><a href="#">R4 Resumen Inventario</a></li>
                       <li><a href="#">R5 Resumen Finanzas</a></li>
                   </ul>
                </li>

                <li><a href="#"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> CRM</a>
                    <ul>
                       <li><a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> C1 Clientes</a></li>
                            <ul>
                                 <li><a href="C1A"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> C1A Crear</a></li>
                                 <li><a href="#"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> C1B Editar</a></li>
                                 <li><a href="C1C"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> C1C Listar</a></li>
                            </ul>      
                       <li><a href="#">C2 Personas</a></li>
                       <li><a href="#">C3 Proyectos</a></li>
                       <li><a href="#">C4 Actividades</a></li>
                   </ul>
                </li>

                <li><a href="#"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Administración</a>
                    <ul>
                       <li><a href="#">A1 Usuarios</a></li>
                       <li><a href="#">A2 Sistema</a></li>
                       <li><a href="#">A3 Configuración</a></li>
                   </ul>
                </li>

                <li>
                    <a href="#"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Shortcuts</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->


      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" id="menu-toggle"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Resumen</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CRM <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Transacción">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>

              <li><a href="login/logout">Cerrar</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>




    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>




