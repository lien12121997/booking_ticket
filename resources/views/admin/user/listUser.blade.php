@extends('admin.layouts.master')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_content">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <h3>List Users </h3><br>
          </div>
          <div class="clearfix"></div>

          @foreach($User as $item)
          <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
            <div class="well profile_view">
              <div class="col-sm-12">
                <h4 class="brief"><i>Digital Strategist</i></h4>
                <div class="left col-xs-7">
                  <h2>{{$item -> name}}</h2>
                  <i class="fa fa-envelope"></i> {{$item -> email}}
                  <ul class="list-unstyled">
                    <li><i class="fa fa-building"></i> Address: {{$item -> address}}</li>
                    <li><i class="fa fa-phone"></i> Phone: {{$item -> phone}}</li>
                  </ul>
                </div>
                <div class="right col-xs-5 text-center">
                  @if(!empty($item->avar))
                    <img class="img-circle img-responsive" src="{{asset('images/'.$item->avar)}}">
                  @else
                    <img class="img-circle img-responsive" src="{{asset('images/user1.png')}}">
                  @endif
                </div>
              </div>
              <div class="col-xs-12 bottom text-center">
                <div class="col-xs-12 col-sm-6 emphasis"></div>
                <div class="col-xs-12 col-sm-6 emphasis">
                  <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                    </i> <i class="fa fa-comments-o"></i> </button>
                  <a href="{{asset('admin/userprofile/'.$item -> id)}}">
                    <button type="button" class="btn btn-primary btn-xs">
                      <i class="fa fa-user"></i> View Profile
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
        <!-- /page content -->
@endsection