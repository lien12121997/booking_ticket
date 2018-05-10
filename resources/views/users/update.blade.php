  
@extends('layouts.app')

@section('content')
  <h1 class="head--title">Change Your Information</h1>

    <div class="container-fluid">
      <form action="" method="POST" id="upload" class="pro-update" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="col-md-12 col-lg-9">
              <div class="form-group">
                  <div class="product-title">Name *</div>
                  <input class="form-control" name="name" value="{{$users -> name}}" />
              </div>
              <div class="form-group">
                  <div class="product-title">Date of Birth *</div>
                  <input class="form-control" type="date" name="dob" value="{{$users -> dob}}"/>
              </div>
              <div class="form-group">
                  <div class="product-title">Phone *</div>
                  <input class="form-control" type="number" name="phone" value="{{$users -> phone}}"/>
              </div>
              <div class="form-group">
                  <div class="product-title">Email *</div>
                  <input class="form-control" name="email" value="{{$users -> email}}"/>
              </div>
              <div class="form-group">
                  <div class="product-title">Address *</div>
                  <input class="form-control" type="text" name="address" id="location" value="{{$users -> address}}" />
              </div>
              <input name="lat" id="lat" type="hidden">
              <input name="lng" id="lng" type="hidden">
              <input id="pac-input" class="controls map-input" type="text">
              <div id="map" class="map"></div>
          </div>
          <div class="col-lg-3 col-right">
            <div class="add--img">
              <div class="form-group form--img">
                <input type="file" name="file" class="file" id="imageUpload" multiple onchange="previewImg(event);">
                <button class="browse btn btn-img" type="button">
                  <img src="{{ asset('images/Layer2.png') }}" width="100px" height="100px">
                </button>
              </div>
              <div class="img--product box-preview-img"></div>
              <div class="form-group form--img">
                <div class="img--product">
                  <img id="thumb" src="{{asset('images/'.$users->avar)}}" width="100px" height="100px" />
                </div>
              </div>
              <button class="btn btn-submit btn-update--pro" type="submit">Update</button>
            </div>
          </div>
       
      <form>
            <!-- /.container-fluid -->
  </div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVfYmJDDq07yPebJwJHN_CSmMRcj3AiUs&libraries=places&callback=initMapadd"></script>
<script type="text/javascript" src="{{ asset('js/google_map.js') }}"></script>
@endsection

<style type="text/css">
  .container {width: 970px !important;}
</style>
