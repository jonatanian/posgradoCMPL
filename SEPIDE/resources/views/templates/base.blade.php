
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
  <link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/skin/sepidi-skin/css/theme.css") }}">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/admin-tools/admin-forms/css/admin-forms.css") }}">

  <link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/js/bootstrap-tagsinput.css") }}">

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
          <img height="60" alt="SEPIDI CMPL" src="{{url('/')}}/site/logo/logo.png">
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
    @if($investigador['rol'] == 1)
			<div class="navbar-btn btn-group">
      			<a class="topbar-menu-toggle btn btn-sm" href="#" data-toggle="button">
          			<span class="fa fa-cog"></span>
      			</a>
    		</div>
      @endif
		</li>

        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle"></i>
        </li>

        <li class="dropdown menu-merge">
          <a class="dropdown-toggle fw600 p15" href="#" data-toggle="dropdown">
          	<img class="mw30 br64" alt="avatar" src="http://148.204.90.214/SISACMPL/images/placeholder.png">
          	<span class="hidden-xs pl15">{{auth()->user()->name}}</span>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
            <li class="dropdown-footer">
              <a href="{{ url('/admin/password') }}">
              <span class="fa fa-lock pr5"></span> Cambiar contraseña </a>
            </li>
            <li class="dropdown-footer">
              <a href="{{ url('/edit_perfil/'.$investigador['id']) }}">
              <span class="fa fa-user pr5"></span> Modificar perfil </a>
            </li>
            <li class="dropdown-footer">
              <a href="{{ url('/logout') }}">
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
                <div class="media-author">{{$investigador['grado']}} {{$investigador['nombre']}} {{$investigador['ap_paterno']}} {{$investigador['ap_materno']}}</div>
              </div>
            </div>
          </div>
        </header>

        <!-- Start: Sidebar Menu -->
        <nav class="widget-body" role="navigation">
            <ul class="nav sidebar-menu acc-menu">

              <!-- sidebar resources -->
              <li class="sidebar-label pt15"></li>
              <li class="active">
                <a href="{{url('/principal')}}">
                  <span class="glyphicon glyphicon-globe"></span>
                  <span class="sidebar-title">Inicio</span>
                </a>
              </li>

              <li class="active">
                <a href="{{url('/perfil')}}">
                  <span class="glyphicon glyphicon-user"></span>
                  <span class="sidebar-title">Perfil</span>
                </a>
              </li>

              <li>
                <a href="{{url('/proyectos')}}">
                  <span class="glyphicon glyphicon-folder-close"></span>
                  <span class="sidebar-title">Proyectos de I+D+i</span>
                </a>
              </li>

              <li>
                <a href="{{url('/publicaciones')}}">
                  <span class="glyphicon glyphicon-calendar"></span>
                  <span class="sidebar-title">Publicaciones</span>
                </a>
              </li>


             <li>
                <a href="{{url('/congresos')}}">
                  <span class="glyphicon glyphicon-blackboard"></span>
                  <span class="sidebar-title">Congresos</span>
                </a>
              </li>

              <li>
                <a href="{{ url('/patentes') }}">
                  <span class="glyphicon glyphicon-registration-mark"></span>
                  <span class="sidebar-title">Patentes</span>
                </a>
              </li>

              <li>
                <a href="{{ url('/transferencias') }}">
                  <span class="glyphicon glyphicon-cog"></span>
                  <span class="sidebar-title">Transferencia de tecnología e innovación</span>
                </a>
              </li>

              <li>
                <a href="{{ url('/conferencias') }}">
                  <span class="glyphicon glyphicon-bullhorn"></span>
                  <span class="sidebar-title">Conferencias</span>
                </a>
              </li>

              <li>
                <a href="{{ url('/docencias') }}">
                  <span class="glyphicon glyphicon-education"></span>
                  <span class="sidebar-title">Docencia</span>
                </a>
              </li>

              <li>
                <a href="{{ url('/software') }}">
                  <span class="glyphicon glyphicon-console"></span>
                  <span class="sidebar-title">Software</span>
                </a>
              </li>

              <li>
                <a href="{{ url('/servicios') }}">
                  <span class="glyphicon glyphicon-flash"></span>
                  <span class="sidebar-title">Servicios</span>
                </a>
              </li>

              <li>
                <a href="{{ url('/movilidad') }}">
                  <span class="glyphicon glyphicon-plane"></span>
                  <span class="sidebar-title">Movilidad</span>
                </a>
              </li>

              <li>
                <a href="">
                  <span class="glyphicon glyphicon-book"></span>
                  <span class="sidebar-title">Dirección de tesis CMP+L</span>
                </a>
              </li>

              <li>
                <a href="">
                  <span class="glyphicon glyphicon-bookmark"></span>
                  <span class="sidebar-title">Dirección de tesis institucional</span>
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
      @if($investigador['rol'] == 1)
      <div class="alt" id="topbar-dropmenu">
        <div class="topbar-menu row">
                      <div class="col-xs-4 col-sm-2">
              <a class="metro-tile bg-warning light" href="http://148.204.90.214/SISACMPL/SIG/RD">
                <span class="fa fa-gears text-muted"></span>
                <span class="metro-title">Configuración de SEPIDI</span>
              </a>
            </div>
            <div class="col-xs-4 col-sm-2">
              <a class="metro-tile bg-warning light" href="{{url('/admin')}}">
                <span class="fa fa-sitemap text-muted"></span>
                <span class="metro-title">Administrar usuarios</span>
              </a>
            </div>
            <div class="col-xs-4 col-sm-2">
            <a class="metro-tile bg-warning light" href="http://148.204.90.214/SISACMPL/SIG/crearAvisos">
              <span class="glyphicon glyphicon-bullhorn text-muted"></span>
              <span class="metro-title">Otro</span>
            </a>
          </div>
        </div>
      </div>
      @endif
      <!-- End: Topbar-Dropdown -->

      <!-- Begin: Content -->
      @yield('content')

      <!-- Begin: Page Footer -->
      <footer class="affix" id="content-footer">
        <div class="row">
          <div class="col-md-6">
            <span class="footer-legal">© 2017 SEPIDI CMPL-IPN</span>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
  <script type="text/javascript" src="{{URL::asset('assets/js/bootstrap-tagsinput.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('assets/js/bootstrap-tagsinput-angular.min.js')}}"></script>

<!-- Validaciones de la vista -->
  <script type="text/javascript" src="{{URL::asset('site/js/main.js')}}"></script>

 

  <script type="text/javascript">
  jQuery(document).ready(function() {
    $('.datepicker').datepicker();
    "use strict";

    // Init Theme Core
    Core.init();

    // Init Demo JS
    Demo.init();

  });
  </script>

</body>

</html>