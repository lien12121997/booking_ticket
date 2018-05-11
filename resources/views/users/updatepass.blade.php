@extends('layouts.app')

@section('content')
<div class="update-pass col-md-6">
    @if(session('error'))
        <div class="alert alert-danger" style=" margin-top: 20px;">
            {{session('error')}}      
        </div>
    @endif
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div >
    <h3 class="form_h3">CHANGE PASSWORD</h3>
    <form action="" method="POST" class="form_login" >
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label>Current Password</label>
            <input name="passwordOld" type="password" class="form-control" />
        </div>
        <div class="form-group">
            <label>New Password</label>
            <input name="passwordNew" type="password" class="form-control" />
        </div>
        <!-- value="{{ csrf_token() }} được dùng để chống lại kỹ thuật tấn công CSRF -->
        <button class="btn btn-primary btn-lg" type="submit" value="{{ csrf_token() }}">
            Change
        </button>
    </form>
</div>

@endsection