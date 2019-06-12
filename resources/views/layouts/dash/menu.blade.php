<body class="nav-md" style="background-color:#a00303;">
    <div class="container body">
      <div class="main_container">
        <div  class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <center>   
                <a href="{{ url('user/welcome')}}" class="site_title" ><h3 id="site_title">Quality Tools</h3></a>
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
                  @if(Auth::user()->rol == "developer" or Auth::user()->rol == "administator" or Auth::user()->rol == "reporting")
                  <li><a><i class="glyphicon glyphicon-user "></i> Users <span class="fa fa-chevron-down  fa-2x fa-lg" ></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('user/list?option=active') }}">List users</a></li>
                    </ul>
                  </li>
                  @endif
                  @if(Auth::user()->rol == "developer" or Auth::user()->rol == "administator" or Auth::user()->rol == "reporting")
                  <li><a><i class="glyphicon glyphicon-globe"></i> Campaigns <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('campaign/list?option=active') }}">List campaigns</a></li>
                      <li><a href="{{ url('campaign/create') }}">Create new campaign</a></li>
                    </ul>
                  </li>
                  @endif 
                  @if(Auth::user()->campaing_id == 1 or Auth::user()->campaing_id == 4)
                      <li><a><i class="glyphicon glyphicon-headphones"></i>Fedex<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="{{ url('fedex/template') }}">Template</a></li>
                          <li><a href="{{ url('fedex/rawdata') }}">Rawdata</a></li>
                        @if(Auth::user()->rol == "developer" or Auth::user()->rol == "reporting" or Auth::user()->rol == "administator")
                          <li><a target="_blank" href="{{ url('fedex/reporting')}}">Reporting</a></li>
                        @endif
                        </ul>
                      </li>
                  @endif
                  @if(Auth::user()->campaing_id == 1 or Auth::user()->campaing_id == 3)
                      <li><a><i class="glyphicon glyphicon-headphones"></i>ADP<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="{{ url('adp/templateTier2') }}">Tier 2 Scorecard (Still in development)</a></li>
                          <li><a href="{{ url('adp/viewTracker') }}">Incident tracker</a></li>
                          <li><a href="{{ url('adp/rawdataTracker') }}">Rawdata Incident tracker</a></li>
                        </ul>
                      </li>
                  @endif
                  @if(Auth::user()->campaing_id == 1 or Auth::user()->campaing_id == 2)
                      <li><a><i class="glyphicon glyphicon-headphones"></i>Oportun<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        </ul>
                      </li>
                  @endif                                       
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
          <a id="menu_toggle" onclick="siteTitle()"><i class="fa fa-bars"></i></a>
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