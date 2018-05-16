@extends('admin.layouts.master')

@section('content')

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ages Edit </h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
          <li><a class="close-link"><i class="fa fa-close"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
      <br />
      <form action="" method="POST" class="form-ins">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="col-md-12 col-lg-8">
              <div class="form-group">
                  <div class="product-title">Ages *</div>
                  <input class="form-control" name="name" placeholder="Enter Name" value="{{$luatuoi -> name}}" />
              </div>
              <div class="col-md-9" style="text-align: center;">
                <button class="btn btn-success" type="submit" value="Insert">Update</button>
                <button class="btn btn-primary" type="reset" value="Reset">Reset</button>
              </div>
          </div>
        </div>
      <form>
    </div>
  </div>
</div>
</div>

@endsection