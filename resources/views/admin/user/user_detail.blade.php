@extends('admin.layouts.master')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>User - {{$User -> name}}</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
          <div class="profile_img">
            <div id="crop-avatar">
              <!-- Current avatar -->
              @if(!empty($User->avar))
                <img class="img-responsive avatar-view" src="{{asset('images/'.$User->avar)}}">
              @else
                <img class="img-responsive avatar-view" src="{{asset('images/user1.png')}}">
              @endif
            </div>
          </div>
        </div>

        <div class="col-md-9 col-sm-9 col-xs-12">
          <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
              <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
              </li>
            </ul>

            <table class="table">
                <thead>
                    <tr>
                      <td><i class="fa fa-user"></i> <b>Username</b></td>
                      <td>{{$User -> name}}</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-envelope"></i> <b>Age</b></td>
                      <td>{{$User -> dob}}</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-envelope"></i> <b>Email - Address</b></td>
                      <td>{{$User -> email}}</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-map-marker user-profile-icon"></i> <b>Address</b></td>
                      <td>{{$User -> address}}</td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-phone"></i> <b>Telephone</b></td>
                      <td>{{$User -> phone}}</td>
                    </tr>
                </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection