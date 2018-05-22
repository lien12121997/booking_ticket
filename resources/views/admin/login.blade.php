<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administration </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

<body class="login">

<a class="hiddenanchor" id="signup"></a>
<a class="hiddenanchor" id="signin"></a>

<div class="login_wrapper">
    <div class="animate form login_form">
  	<section class="login_content">
        @if(session('error'))
            <div class="alert alert-primary" style="font-size: 17px">
                {{session('error')}}      
            </div>
        @endif

        <form method="POST">
        	{{ csrf_field() }}

            <div class="alert alert-danger" style="display: none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p style="color:red; display:none;" class="error errorlogin"></p>
            </div>

            <h1>Login Form</h1>
            <div>
            	<input type="text" class="form-control" placeholder="Username" name="email" id="email"/>
            	<p style="color:red; display:none; font-weight: bold" class="error erroremail"></p>
            </div>
            <div>
            	<input type="password" class="form-control" placeholder="Password" name="password" id="password" />
            	<p style="color:red; display:none; font-weight:bold" class="error errorpassword"></p>
            </div>
            <div>
                <button class="btn btn-default submit" type="submit" value="{{ csrf_token() }}" id="admin_submit" 		  name="admin_submit">Login</button>
            </div>
        	<div class="clearfix"></div>
        	<div class="clearfix"></div>
            <br />

            <div>
              	<h1><i class="fa fa-paw"></i> Cinema Center!</h1>
              	<p>©2016 All Rights Reserved. National Cinema Center! VinCom Center 8th floor, 379 Pham Ngoc Thach St, Viet Nam</p>
            </div>
        </form>
  	</section>
    </div>
</div>
<!-- <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script> -->
<!-- <script src="{{asset('js/admin.js')}}"></script> -->
</body>
</html>
