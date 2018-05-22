@extends('layouts.app')

@section('content')

<div class="container-contact100">
	@if(count($errors) > 0)
    <div class="alert-contact alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    
    @if(session('successfull'))
        <div class="alert-contact alert alert-success">
            {{session('successfull')}}      
        </div>
    @endif
	<div class="wrap-contact100">
		<form class="contact100-form validate-form" method="POST" action="">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<span class="contact100-form-title">
				Send Us A Message
			</span>

			<label class="label-input100" for="first-name">Tell us your name *</label>
			<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
				<input id="first-name" class="input100" type="text" name="firstName" placeholder="First name">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
				<input class="input100" type="text" name="lastName" placeholder="Last name">
				<span class="focus-input100"></span>
			</div>

			<label class="label-input100" for="email">Enter your email *</label>
			<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
				<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
				<span class="focus-input100"></span>
			</div>

			<label class="label-input100" for="phone">Enter phone number</label>
			<div class="wrap-input100">
				<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
				<span class="focus-input100"></span>
			</div>

			<label class="label-input100" for="message">Message *</label>
			<div class="wrap-input100 validate-input" data-validate = "Message is required">
				<textarea id="message" class="input100" name="message" placeholder="Write us a message">
				</textarea>
				<span class="focus-input100"></span>
			</div>

			<div class="container-contact100-form-btn">
				<button class="contact100-form-btn" value="{{ csrf_token() }}" type="submit">
					Send Message
				</button>
			</div>
		</form>

		<div class="contact100-more flex-col-c-m" style="background-image: url('images/cinema.jpg');">
			<div class="flex-w size1 p-b-47">
				<div class="txt1 p-r-25">
					<span class="lnr lnr-map-marker"></span>
				</div>
                @foreach($infomation as $infomation)
				<div class="flex-col size2">
					<span class="txt1 p-b-20"> Address </span>
					<span class="txt2">{{ $infomation->address}}</span>
				</div>
			</div>

			<div class="dis-flex size1 p-b-47">
				<div class="txt1 p-r-25">
					<span class="lnr lnr-phone-handset"></span>
				</div>

				<div class="flex-col size2">
					<span class="txt1 p-b-20"> Lets Talk </span>
					<span class="txt3">{{ $infomation->hotline}}</span>
				</div>
			</div>

			<div class="dis-flex size1 p-b-47">
				<div class="txt1 p-r-25">
					<span class="lnr lnr-envelope"></span>
				</div>

				<div class="flex-col size2">
					<span class="txt1 p-b-20"> General Support </span>
					<span class="txt3">{{ $infomation->support}}</span>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

@endsection