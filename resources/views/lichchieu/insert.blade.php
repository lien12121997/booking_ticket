@extends('admin.layouts.master')

@section('content')

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Insert Show Time</h2>
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
              <div class="product-title">Phim *</div>
              <select class="form-control form-select" name="id_phim">
                @foreach($phim as $phim)
                  <option value="{{$phim ->id}}">{{$phim->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <div class="product-title">Chất Lượng *</div>
              <select class="form-control form-select" name="id_chatluong">
                @foreach($chatluong as $chatluong)
                  <option value="{{$chatluong ->id}}">{{$chatluong->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <div class="product-title">Phòng chiếu *</div>
              <select class="form-control form-select" name="id_phongchieu">
                @foreach($phongchieu as $phongchieu)
                  <option value="{{$phongchieu ->id}}">{{$phongchieu->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <div class="product-title">Ca Chiếu *</div>
              <select class="form-control form-select" name="id_cachieu">
                @foreach($cachieu as $cachieu)
                  <option value="{{$cachieu ->id}}">{{$cachieu->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-9" style="text-align: center;">
                <button class="btn btn-success" type="submit" value="Insert">Insert</button>
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