@extends('admin.layouts.master')

@section('content')

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Edit Detail Rooms</h2>
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
          <div class="col-md-12 col-lg-9">
            <div class="form-group">
              <div class="product-title">Ghế</div>
              <select class="form-control form-select" name="id_ghe">
                @foreach($ghe as $ghe)
                <option 
                  @if($pcct -> id_ghe == $ghe -> id)
                    {{"selected"}}
                  @endif
                    value="{{$ghe ->id}}">{{$ghe->name}}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <div class="product-title">Phòng Chiếu</div>
              <select class="form-control form-select" name="id_phongchieu">
                @foreach($phongchieu as $phongchieu)
                <option 
                  @if($pcct -> id_phongchieu == $phongchieu -> id)
                    {{"selected"}}
                  @endif
                    value="{{$phongchieu ->id}}">{{$phongchieu->name}}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="col-md-9" style="text-align: center;">
              <button class="btn btn-success" type="submit" value="Update">Update</button>
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