@extends('admin.layouts.master')

@section('content')

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Edit Infomation</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
          <li><a class="close-link"><i class="fa fa-close"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
      <br />
      <form action="" method="POST" class="form-ins" id="upload" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="col-md-7 col-lg-7">
              <div class="form-group">
                  <div class="product-title">Name *</div>
                  <input class="form-control" name="name" placeholder="Enter Name" value="{{$infomation -> name}}" />
              </div>
              <div class="form-group">
                  <div class="product-title">Address *</div>
                  <input class="form-control" name="address" type="text" value="{{$infomation -> address}}" />
              </div>
              <div class="form-group">
                  <div class="product-title">Email - Support *</div>
                  <input class="form-control" name="support" type="text" value="{{$infomation -> support}}" />
              </div>
              <div class="form-group">
                  <div class="product-title">Slogan *</div>
                  <textarea class="form-control" name="slogan" rows="3px">{{$infomation -> slogan}}</textarea>
              </div>
              <div class="form-group">
                  <div class="product-title">Website *</div>
                  <input class="form-control" name="website" type="text" value="{{$infomation -> website}}" />
              </div>
              <div class="form-group">
                  <div class="product-title">Fanpage *</div>
                  <input class="form-control" name="fanpage" type="text" value="{{$infomation -> fanpage}}" />
              </div>
          </div>

          <div class="form-group col-md-5">
            <div class="form-group">
                <div class="product-title">Phone Number*</div>
                <input class="form-control" name="phone" type="text" value="{{$infomation -> phone}}" />
            </div>
            <div class="form-group">
                <div class="product-title">Hotline *</div>
                <input class="form-control" name="hotline" type="text" value="{{$infomation -> hotline}}" />
            </div>
            <div class="row img-infor">
              <div class="form-group form--img col-md-5">
                <input type="file" name="file" class="file hidden" id="imageUpload" 
                       multiple onchange="previewImg(event);">
                <button class="browse btn btn-img" type="button">
                  <img src="{{ asset('images/Layer2.png') }}">
                </button>
              </div>
              <div class="form-group form--img col-md-5">
                <div class="img--product box-preview-img preview-info"></div>
              </div>
            </div>
            
            <div>
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