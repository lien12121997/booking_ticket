<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i>
                <span>Gentelella Alela!</span>
              </a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('images/user1.png')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome!</span>
                <h2>Voi Kute</h2>
              </div>
            </div><br /><!-- /menu profile quick info -->
        
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{asset('admin/home')}}"><i class="fa fa-home"></i>Home
                    <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{asset('admin/listuser')}}">List User</a></li>
                    </ul>
                  </li>
                  <li><a> <i class="fa fa-film"></i>Movies <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{asset('phim/list')}}">List Movies</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-newspaper-o"></i> News <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{asset('tintuc/list')}}">News</a></li>
                      <li><a href="{{asset('loaitin/list')}}">Type Of News</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Show Time <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{asset('lichchieu/list')}}">Show Time</a></li>
                    </ul>
                  </li>
                  <li><a href="{{asset('theloai/list')}}"><i class="fa fa-table"></i> Categorys 
                    <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <!-- <li><a href="{{asset('chatluong/list')}}"><i class="fa fa-star-half-empty"></i> Qualitys 
                    <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{asset('phongchieu/list')}}"><i class="fa fa-desktop"></i> Rooms 
                    <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{asset('luatuoi/list')}}"><i class="fa fa-user"></i> Ages 
                    <span class="fa fa-chevron-down"></span></a>
                  </li> -->
                  
              
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>