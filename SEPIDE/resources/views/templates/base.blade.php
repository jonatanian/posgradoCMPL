<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>SEPIDE-CMPL | Instituto Politécnico Nacional</title>
  <meta name="keywords" content="SEPIDE-CMPL IPN" />
  <meta name="description" content="Centro Mexicano para la Producción más Limpia del Instituto Politécnico Nacional">
  <meta name="author" content="Castañeda Chavero Jonatan Ian">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset("http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700") }}">
  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/skin/default_skin/css/theme.css") }}">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/admin-tools/admin-forms/css/admin-forms.css") }}">

  <!-- Favicon -->
  {{ URL::asset("assets/img/favicon.ico") }}
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="blank-page">

    <div id="main">

    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top bg-primary">
      <div class="navbar-branding">
        <a class="navbar-brand" href="#">
          <img height="60" alt="SISA CMPL" src="{{url('/')}}/site/logo/logo.png">
        </a>
        <span class="ad ad-lines" id="toggle_sidemenu_l"></span>
      </div>
      <ul class="nav navbar-nav navbar-left">
        <li class="hidden-xs">
          <span class="fs26"></span>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		<li>
			<div class="navbar-btn btn-group">
      			<a class="topbar-menu-toggle btn btn-sm" href="#" data-toggle="button">
          			<span class="fa fa-cog"></span>
      			</a>
    		</div>
		</li>

        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle"></i>
        </li>

        <li class="dropdown menu-merge">
          <a class="dropdown-toggle fw600 p15" href="#" data-toggle="dropdown">
          	<img class="mw30 br64" alt="avatar" src="http://148.204.90.214/SISACMPL/images/placeholder.png">
          	<span class="hidden-xs pl15">Jonatan Ian Castañeda Chavero</span>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
            <li class="dropdown-footer">
              <a href="http://148.204.90.214/SISACMPL/salir">
              <span class="fa fa-power-off pr5"></span> Cerrar sesión </a>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside class="nano nano-light affix has-scrollbar" id="sidebar_left">

      <!-- Start: Sidebar Left Content -->
      <div tabindex="0" class="sidebar-left-content nano-content" style="right: -12px;">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">

          <!-- Sidebar Widget - Author -->
          <div class="sidebar-widget author-widget">
            <div class="media">
              <a class="media-left" href="#">
                <img class="img-responsive" alt="Usuario" src="http://148.204.90.214/SISACMPL/images/placeholder.png">
              </a>
              <div class="media-body">
                <div class="media-links">
                   <p class="sidebar-menu-toggle">Bienvenido</p>
                </div>
                <div class="media-author">Dr./Mtro. Jonatan Ian Castañeda Chavero</div>
              </div>
            </div>
          </div>
        </header>

        <!-- Start: Sidebar Menu -->
        <nav class="widget-body" role="navigation">
            <ul class="nav sidebar-menu acc-menu">
              <li class="sidebar-label pt20">Menú</li>
              <li>
                <a href="http://148.204.90.214/SISACMPL/SIG">
                  <span class="glyphicon glyphicon-book"></span>
                  <span class="sidebar-title">Página principal</span>
                </a>
              </li>

              <!-- sidebar resources -->
              <li class="sidebar-label pt15"></li>
              <li class="active">
                <a href="">
                  <span class="glyphicon glyphicon-globe"></span>
                  <span class="sidebar-title">Inicio</span>
                </a>
              </li>
              <!--<li class="hasChild">
                <a href="javascript:;">
                  <span class="fa fa-envelope"></span>
                  <span class="sidebar-title">Áreas del CMPL</span>
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav acc-menu">
                  <li>
                      <a href="http://148.204.90.214/SISACMPL/SIG/Master?IdArea=1">
                      <span class="fa fa-bank"></span> Dirección </a>
                  </li>
                  <li>
                      <a href="http://148.204.90.214/SISACMPL/SIG/Master?IdArea=2">
                      <span class="fa fa-wrench"></span> Subdirección Técnica</a>
                  </li>
                  <li>
                      <a href="http://148.204.90.214/SISACMPL/SIG/Master?IdArea=3">
                      <span class="fa fa-graduation-cap"></span> Subdirección de Posgrado</a>
                  </li>
                  <li>
                      <a href="http://148.204.90.214/SISACMPL/SIG/Master?IdArea=4">
                      <span class="fa fa-globe"></span> Subdirección de Vinculación y Apoyo</a>
                  </li>
                  <li>
                      <a href="http://148.204.90.214/SISACMPL/SIG/Master?IdArea=5">
                      <span class="fa fa-cubes"></span> Departamento de Servicios Administrativos y Técnicos</a>
                  </li>
                  <li>
                      <a href="http://148.204.90.214/SISACMPL/SIG/Master?IdArea=6">
                      <span class="fa fa-database"></span> Departamento de Sistemas y Banco de Datos</a>
                  </li>
                </ul>
              </li>-->

              <li>
                <a href="" target="_blank">
                  <span class="glyphicon glyphicon-bookmark"></span>
                  <span class="sidebar-title">Proyectos de I+D+i</span>
                </a>
              </li>

              <li>
                <a href="">
                  <span class="glyphicon glyphicon-file"></span>
                  <span class="sidebar-title">Publicaciones</span>
                </a>
              </li>


             <li>
                <a href="">
                  <span class="glyphicon glyphicon-folder-open"></span>
                  <span class="sidebar-title">Congresos</span>
                </a>
              </li>

              <li>
                <a href="">
                  <span class="glyphicon glyphicon-grain"></span>
                  <span class="sidebar-title">Patentes</span>
                </a>
              </li>

              <li>
                <a href="http://148.204.90.214/SISACMPL/SIG/Master?IdArea=17">
                  <span class="glyphicon glyphicon-list-alt"></span>
                  <span class="sidebar-title">Transferencia de tecnología e innovación</span>
                </a>
              </li>

              <li>
                <a href="">
                  <span class="glyphicon glyphicon-user"></span>
                  <span class="sidebar-title">Divulgación del conocimiento</span>
                </a>
              </li>

              <li>
                <a href="">
                  <span class="glyphicon glyphicon-list-alt"></span>
                  <span class="sidebar-title">Software</span>
                </a>
              </li>

              <li>
                <a href="">
                  <span class="glyphicon glyphicon-paperclip"></span>
                  <span class="sidebar-title">Servicio</span>
                </a>
              </li>

              <li>
                <a href="">
                  <span class="glyphicon glyphicon-retweet"></span>
                  <span class="sidebar-title">Movilidad</span>
                </a>
              </li>

              <li>
                <a href="">
                  <span class="glyphicon glyphicon-retweet"></span>
                  <span class="sidebar-title">Dirección de tesis</span>
                </a>
              </li>
              
    	      </ul>
         </nav>
    	      <!-- Start: Sidebar Collapse Button -->
    	      <div class="sidebar-toggle-mini">
    	        <a href="#">
    	          <span class="fa fa-sign-out"></span>
    	        </a>
    	      </div>
    	      <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    <div class="nano-pane" style="display: none;"><div class="nano-slider" style="height: 1966px; transform: translate(0px, 0px);"></div></div></aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Start: Topbar-Dropdown -->
      <div class="alt" id="topbar-dropmenu">
        <div class="topbar-menu row">
                      <div class="col-xs-4 col-sm-2">
              <a class="metro-tile bg-warning light" href="http://148.204.90.214/SISACMPL/SIG/RD">
                <span class="fa fa-gears text-muted"></span>
                <span class="metro-title">Configuración de SIG</span>
              </a>
            </div>
            <div class="col-xs-4 col-sm-2">
              <a class="metro-tile bg-warning light" href="http://148.204.90.214/SISACMPL/SIG/RD/Organigrama">
                <span class="fa fa-sitemap text-muted"></span>
                <span class="metro-title">Editar organigramas</span>
              </a>
            </div>
                    <div class="col-xs-4 col-sm-2">
            <a class="metro-tile bg-warning light" href="http://148.204.90.214/SISACMPL/SIG/crearAvisos">
              <span class="glyphicon glyphicon-bullhorn text-muted"></span>
              <span class="metro-title">Avisos</span>
            </a>
          </div>
        </div>
      </div>
      <!-- End: Topbar-Dropdown -->

      <!-- Begin: Content -->
      

      <!-- Begin: Page Footer -->
      <footer class="affix" id="content-footer">
        <div class="row">
          <div class="col-md-6">
            <span class="footer-legal">© 2017 SEPIDE CMPL-IPN</span>
          </div>
        </div>
      </footer>
      <!-- End: Page Footer -->

      <!-- End: Content -->

    </section>
  </div>

   <!-- jQuery -->
  <script type="text/javascript" src="{{URL::asset('assets/jquery/jquery-3.2.1.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('assets/jquery/jquery-ui/jquery-ui.min.js')}}"></script>
  
  
  <script type="text/javascript" src="{{URL::asset('avalon/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('avalon/plugins/sparklines/jquery.sparklines.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('avalon/js/enquire.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('avalon/js/application.js')}}"></script>

  <!-- Theme Javascript -->
  <script type="text/javascript" src="{{URL::asset('assets/js/utility/utility.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('assets/js/demo/demo.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('assets/js/main.js')}}"></script>

  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core
    Core.init();

    // Init Demo JS
    Demo.init();

  });
  </script>

</body>

</html>