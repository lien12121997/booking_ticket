@extends('layouts.app')

@section('content')

<div class="user-info">
	<div class="row row-userInfo">
		<div class="col-md-12 col-lg-4">
	        <img src="{{asset('images/'.$users->avar)}}" width="300px" height="300px" 
	        		class=" img-user" />
		</div>
		<div class="col-md-12 col-lg-8" style="padding-left: 50px;">
			<h1>Information</h1>
			<div class="col-md-12" style="margin-bottom: 30px;">
				<div class="user-tit">
					<p ><b>Name</b></p>
					<p ><b>Date of Birth</b></p>
					<p ><b>Phone</b></p>
					<p ><b>Address</b></p>
					<p ><b>Email</b></p>
				</div>
				<div class="user-desc">
					<p>{{$users->name}}</p>
					<p>{{$users->dob}}</p>
					<p>{{$users->phone}}</p>
					<p>{{$users->address}}</p>
					<p>{{$users->email}}</p>
				</div>
			</div>
			<div class="col-md-12">
				<a href="{{asset('updateUser/'.$users->id)}}"><button class="btn-submit">Change</button></a>
			</div>
		</div>
	</div>
</div>

@endsection