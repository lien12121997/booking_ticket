<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admim</title>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{asset('css/util.css')}}" rel="stylesheet">
	<link href="{{asset('css/main_admin.css')}}" rel="stylesheet">
	<link href="{{asset('css/material-design-iconic-font.min.css')}}" rel="stylesheet">
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
 	<script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="alert alert-danger error errorlogin" style="display: none;" >
	                <p style="color:red; display: none" class="error errorloginadmin"></p>
	            </div>
				<form class="login100-form " method="POST" action="">
					{{ csrf_field() }}

					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<div class="wrap-input100 validate-input">
						<p>Username</p>
						<input class="input100" type="text" name="useradmin" id="useradmin">
						<!-- <span class="focus-input100" data-placeholder="Username"></span> -->
						<p style="color:red; display:none; font-weight: bold" class="error erroruseradmin"></p>
					</div>

					<div class="wrap-input100 validate-input">
						<p>Password</p>
						<input class="input100" type="password" name="password" id="password">
						<!-- <span class="focus-input100" data-placeholder="Password"></span> -->
						<p style="color:red; display:none; font-weight:bold" class="error errorpass"></p>
					</div>

					<div class="container-login100-form-btn" style="padding-bottom: 30px;">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" value="{{ csrf_token() }}"
									id="admin_submit" name="admin_submit">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>