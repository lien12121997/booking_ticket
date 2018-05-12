@extends('layouts.app')

@section('content')

<div class="row">
  	<div class="col-md-12 col-sm-12 col-xs-12 row_profile">
	    <div class="x_panel">
		    <div class="x_title name_profile">
		        <div class="clearfix"></div>
		    </div>

		    <div class="x_content">
		        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
		          	<div class="profile_img">
			            <div id="crop-avatar">
			              <!-- Current avatar -->
			              <img class="img-responsive avatar-view" src="{{asset('images/'.$users->avar)}}" alt="Avatar" title="Change the avatar">
			            </div>
		          	</div>
		        </div>

		        <div class="col-md-8 col-sm-8 col-xs-12 profile_right">
		          	<div class="user_profile" role="tabpanel" data-example-id="togglable-tabs">
		            	<h1>Information</h1>
			            <div style="margin-top: 30px;">
			                <table class="table">
			                  	<thead>
			                    <tr>
			                      	<td><b>Name :</b></td>
			                     	<td>{{$users->name}}</td>
			                    </tr>
			                    <tr>
			                       	<td><b>Date of Birth :</b></td>
			                      	<td>{{$users->dob}}</td>
			                    </tr>
			                    <tr>
			                      	<td><b>Email - Address: </b></td>
			                      	<td>{{$users->email}}</td>
			                    </tr>
			                    <tr>
			                      	<td><b>Address: </b></td>
			                      	<td>{{$users->address}}</td>
			                    </tr>
			                    <tr>
			                      	<td><b>Phone Number: </b></td>
			                      	<td>{{$users->phone}}</td>
			                    </tr>
			                  	</thead>
			                </table>
			                <div class="col-md-12 button_profile">
								<a href="{{asset('updateUser/'.$users->id)}}">
									<button class="btn-submit"> Change Information</button>
								</a>
								<a href="{{asset('updatePass/'.$users->id)}}">
									<button class="btn-submit">Change Password</button>
								</a>
							</div>
			            </div>
		          	</div>
		        </div><!-- end col-md-->

		    </div>
	    </div>
  	</div>
</div>


<div class="row">
  	<div class="col-md-12 col-sm-12 col-xs-12 row_profile">
	    <div class="x_panel transactions-profile">
		    <div class="x_title name_profile">
		        <div class="clearfix"></div>
		    </div>

		    <h2>TRANSACTIONS HISTORY</h2>
		    <div class="x_content">
		        <table class="table table-hover" style="border-radius: 10px;">
		        	<tr class="transactions-tr">
		        		<td>No</td>
		        		<td>Transaction Time</td>
		        		<td>Movie</td>
		        		<td>Image</td>
		        		<td>Phòng Chiếu</td>
		        		<td>Chất Lượng</td>
		        		<td>Khung Giờ </td>
		        		<td>Số Ghế</td>
		        		<td>Price</td>
		        	</tr>

		        	@foreach($transactions as $item)
		        	<tr class="transactions-td">
		        		<td>{{ $i++ }}</td>
		        		<td>{{ $item -> date }}</td>
		        		<td>{{ $item -> phim }}</td>
		        		<td><img src="{{ asset('images/'.$item -> img)}}" width="100px"></td>
		        		<td>{{ $item -> phongchieu }}</td>
		        		<td>{{ $item -> chatluong }}</td>
		        		<td>{{ $item -> start }} - {{ $item -> end }}</td>
		        		<td>{{ $item -> so_ghe }}</td>
		        		<td>{{ ($item -> price)/($item -> qty) }} VNĐ</td>
		        	</tr>
		        	@endforeach	
		        </table>
		    </div>
	    </div>
  	</div>
</div>

@endsection