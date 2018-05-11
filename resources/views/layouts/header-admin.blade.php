
<div class="header">
    <div class="header-top">
        <div class="wrap">
            <div class="banner-no">
                <a href="{{url('home')}}"><img src="{{ asset('images/movie.png') }}" alt="" width="200px" /></a>
            </div>
            <div class="nav-wrap">
                <ul class="group" id="example-one">
                   <li class="current_page_item"><a href="{{url('home')}}">Home</a></li>
                   <li><a href="{{url('home')}}">Movies</a>
                    <ul class="group-list">
                        <li>Phim đang chiếu</li>
                        <li>Phim sắp chiếu</li>
                    </ul>
                   </li>
                   <li><a href="{{url('home')}}">Events</a></li>
                   <li><a href="{{url('contact')}}">Contact</a></li>
                   @guest
                    <li><a href="{{url('user/login')}}">Login</a></li>
                    <li><a href="{{url('user/register')}}">Register</a></li>
                    @else
                    <li><a href="{{url('profile/'.Auth::user()->id)}}">{{ Auth::user()->name }}</a>
                    </li>
                    <li><a href="{{url('user/logout')}}">Logout</a></li>
                    @endguest
                </ul>

                <button class="menu-btn pull-right" id="menu-btn">&#9776; Menu</button>
                    <nav class="pushy pushy-left" data-focus="#first-link">
                        <div class="pushy-content">
                            <ul>
                                <li class="pushy-link"><a href="#">Home</a></li>
                                <li class="pushy-link"><a href="#">Movies</a></li>
                                <li class="pushy-link"><a href="#">Events</a></li>
                                <li class="pushy-link"><a href="{{url('contact')}}">Contact</a></li>
                                @guest
                                <li class="pushy-link"><a href="{{url('user/login')}}">Login</a></li>
                                <li class="pushy-link"><a href="{{url('user/register')}}">Register</a></li>
                                @else
                                <li class="pushy-link"><a href="{{url('user/logout')}}">Logout</a></li>
                                @endguest
                            </ul>
                        </div>
                    </nav>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="block">
        <div class="wrap">
            <div class="h-logo">
                <a href="{{url('home')}}"><img src="{{ asset('images/logo.png') }}" alt=""/></a>
            </div>
            <form action="#" id="reservation-form">
                <fieldset>
                    <div class="field">
                        <label>Find Movies:</label>
                        <input class="form-search " type="text" name="key">
                        <button class="btn-search" type="search">Search</button>
                    </div>
                </fieldset>
            </form>
            <div class="clear"></div>
        </div>
    </div>
</div>
