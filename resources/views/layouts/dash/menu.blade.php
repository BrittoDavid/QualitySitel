<body class="nav-md" style="background-color:#a00303;">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <center>   
              <a href="{{ url('user/welcome')}}" class="site_title"><h3>QS</h3></a>
            </center>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix" style="">
              <div class="">
                <center><img src="{{ asset(Auth::user()->photo)}}" width="80%" class="img-circle" style="border: solid 2px white;height:15em;"></center>
              </div>              
              <div style="margin-left: 1em">
                <h2 style="color: white"></h2>
                <h2 style="color: white">{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3><span>MENU</span></h3>
                <ul class="nav side-menu">
                  @if(Auth::user()->rol == "developer" or Auth::user()->rol == "administator" or Auth::user()->rol == "general"
                  or Auth::user()->rol == "reporting")
                  <li><a><i class="glyphicon glyphicon-user "></i> Users <span class="fa fa-chevron-down  fa-2x fa-lg" ></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('user/list?option=active') }}">List users</a></li>
                    </ul>
                  </li>
                  @endif
                  @if(Auth::user()->rol == "developer" or Auth::user()->rol == "administator" or Auth::user()->rol == "reporting")
                  <li><a><i class="glyphicon glyphicon-globe"></i> Campaigns <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('campaign/list?option=active') }}">List campaigns</a>
                      <li><a href="{{ url('campaign/create') }}">Create new campaign</a>
                    </ul>
                  </li>
                  @endif 
                    @if(Auth::user()->rol == "Gerente" or  Auth::user()->rol == "Administrador" or Auth::user()->rol == "Empresa")
                  <li><a><i class="glyphicon glyphicon-headphones"></i> Wave con Agentes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('agente/asignar') }}">Asignar Agentes a Wave</a>
                    </ul>
                  </li>
                @endif
                 @if(Auth::user()->rol == "Gerente" or  Auth::user()->rol == "Administrador" or Auth::user()->rol == "Empresa")
                  <li><a><i class="fa fa-leanpub fa-x2 fa-lg"></i>Inventarios<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('inventario/listar') }}">Inventario de Productos</a>
                    </ul>
                  </li>
                @endif                                    
                  <!--   @if(Auth::user()->rol == "Gerente" or Auth::user()->rol =="Empresa" or Auth::user()->rol == "Administrador")
                  <li><a><i class="fa fa-edit"></i> Facturación <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('financiero/index') }}">Facturar</a></li>
                      <li><a href="{{ url('financiero/listar') }}">Listar Facturas</a></li>
                    </ul>
                  </li>
                  @endif
                
                  @if(Auth::user()->rol == "Gerente" or Auth::user()->rol == "Administrador" or Auth::user()->rol == "Empresa")
                  <li><a><i class="fa fa-bar-chart-o"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('clientes/crear') }}">Crear Clientes</a></li>
                      <li><a href="{{ url('clientes/index') }}">Listar Clientes</a></li> 
                    </ul>
                  </li>
                  @endif
                  @if(Auth::user()->rol == "Administrador" or Auth::user()->rol == "Empresa")
                  <li><a><i class="fa fa-clone"></i>Responsable <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('responsables/crear') }}">Crear</a></li>
                      <li><a href="{{ url('responsables/index') }}">Listar</a></li>
                    </ul>
                  </li>
                  @endif
                  @if(Auth::user()->rol == "Gerente" or Auth::user()->rol == "Empresa" or Auth::user()->rol == "Administrador" )
                  <li><a><i class="fa fa-archive"></i>Area <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('area/crear') }}">Crear</a></li>
                      <li><a href="{{ url('area/listar') }}">Listar</a></li>
                    </ul>
                  </li>
                  @endif
                  @if(Auth::user()->rol == "Gerente" or Auth::user()->rol == "Administrador" or Auth::user()->rol == "Empresa")
                  <li><a><i class="fa fa-windows"></i> Inventario <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('inventario/crear') }}">Agregar Elemento</a></li>
                      <li><a href="{{ url('inventario/listar') }}">Inventario</a></li>
                                           <li><a href="{{ url('inventario/cargarPlantilla') }}">Cargar Palntilla de Inventario</a></li>
                    </ul>
                  </li>
                  @endif
                  @if(Auth::user()->rol == "Administrador" or Auth::user()->rol == "Empresa")
                  <li><a><i class="fa fa-archive"></i>Valances <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('area/crear') }}">Cuenta de Resultados</a></li>
                      <li><a href="{{ url('area/listar') }}">Valance General</a></li>
                    </ul>
                  </li> 
                  @endif     -->           
                   
                </ul>
              </div>
              <div class="menu_section">
       
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

  <!-- top navigation -->
  <div class="top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="{{ asset(Auth::user()->photo)}}" alt="">{{ Auth::user()->name}}
              <span class=" fa fa-angle-down"></span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu pull-right">
              <li><a href="{{ url('user/profile') }}">
                 <span class="  fa fa-child fa-2x fa-lg"></span>  &nbsp Profile</a>
              </li>
              <li>                                                          
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                  <i class="fa fa-sign-out pull-right"></i>
                  <span class="  fa fa-angellist fa-2x fa-lg"></span>&nbsp &nbsp Exit
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
        <!-- /top navigation -->