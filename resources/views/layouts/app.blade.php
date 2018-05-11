<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact-util.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- FlexSlider -->
  
  <!-- DC Tabs CSS -->
<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
 <!-- jQuery Library (skip this step if already called on page ) -->
<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/jquery.min.js"></script> <!-- (do not call twice) -->
 <!-- DC Tabs JS -->
<!--<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/tabs/js/tsc_tabs.js"></script>-->
<link rel="stylesheet" href="{{ asset('css/tsc_tabs.css') }}" type="text/css" media="all" />
</head>
<body>
    <div class="background">
        @include('layouts.header-admin')
        <div class="main">
            <div class="container">
                @yield('content')  
            </div>
        </div>
        @include('layouts.footer')
    </div>
    

    <!-- Scripts -->
    <script type="text/javascript" language="javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{asset('js/ajaxupload.js')}}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/jquery.color-RGBa-patch.js') }}"></script>
    <script src="{{ asset('js/example.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('js/fontawesome-all.min.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
    
      <script type="text/javascript">
        $(function(){
          SyntaxHighlighter.all();
        });
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
      </script>
</body>
</html>
