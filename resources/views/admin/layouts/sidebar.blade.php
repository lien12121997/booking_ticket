<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i>
        <span>Cinema Tickets!</span>
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
        <h2>{{ Auth::user()->name }}</h2>
      </div>
    </div><br /><!-- /menu profile quick info -->

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Movies</h3>
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
              <li><a href="{{asset('theloai/list')}}">List Categorys</a></li>
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
              <li><a href="{{asset('lichchieu/list')}}">List Show Time</a></li>
              <li><a href="{{asset('chatluong/list')}}">List Qualitys</a></li>
              <li><a href="{{asset('phongchieu/list')}}">List Rooms</a></li>
              <li><a href="{{asset('pcct/list')}}">List Detail Rooms </a></li>
              <li><a href="{{asset('cachieu/list')}}">List Show Case</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-money"></i>Tickets <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{asset('ve/list')}}">List Tickets</a></li>
              <li><a href="{{asset('vct/list')}}">List Detail Tickets</a></li>
              <li><a href="{{asset('ghe/list')}}">List Seats</a></li>
            </ul>
          </li>
          <li><a href="{{asset('infomation/list')}}">
            <i class="fa fa-cogs"></i>Infomation <span class="fa fa-chevron-down"></span></a>
          </li>
        </ul>
      </div>
      <div class="menu_section">
        <h3>Live On</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-bug"></i> Setting Pages <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="e_commerce.html">Setting Pages</a></li>
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
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('admin/logout') }}">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>