@extends('layouts.app')

@section('content')

<div class="sidebar col-md-3">
  @include('layouts.sidebar')
</div>
<div class="content col-md-9">

  <h1 class="head--title">Cập Nhật Phim</h1>

    <div class="container-fluid">
      <form action="" method="POST" class="form-ins" enctype="multipart/form-data" id="upload">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="col-md-9">
            <div class="form-group form-text">
              <div class="product-title">Name</div>
              <input class="form-control" name="name" placeholder="Enter Name" value="{{$phim -> name}}" />
            </div>

            <div class="col-md-6 form-group">
              <div class="product-title">Date Start</div>
              <input class="form-control" name="date_khoichieu" type="date" value="{{$phim -> date_khoichieu}}" />
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">Date End</div>
              <input class="form-control" name="date_ketthuc" type="date" value="{{$phim -> date_ketthuc}}" />
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">Status</div>
              <input class="form-control" name="tinh_trang" value="{{$phim -> tinh_trang}}" />
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">Length Of Time</div>
              <input class="form-control" name="do_dai" value="{{$phim -> do_dai}}" />
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">Kinds</div>
              <select class="form-control form-select" name="id_theloai">
                @foreach($theloai as $theloai)
                <option 
                  @if($phim -> id_theloai == $theloai -> id)
                    {{"selected"}}
                  @endif
                    value="{{$theloai ->id}}">{{$theloai->name}}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">Ages</div>
              <select class="form-control form-select" name="id_luatuoi">
                @foreach($luatuoi as $luatuoi)
                <option 
                  @if($phim -> id_luatuoi == $luatuoi -> id)
                    {{"selected"}}
                  @endif
                    value="{{$luatuoi ->id}}">{{$luatuoi->name}}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="form-group form-text">
              <div class="product-title">Description</div>
              <textarea class="form-control" name="desc">{{$phim -> desc}}</textarea>
            </div>
          </div>

          <div class="form-group col-md-3">
            <div class="add--img">
              <div class="product-title">Add Image</div>
              <div class="form-group form--img">
                <input type="file" name="img" class="file" id="imageUpload" multiple onchange="previewImg(event);">
                <button class="browse btn btn-img" type="button">
                  <img src="{{ asset('images/movie.png') }}" width="100px" height="100px">
                </button>
                <div class="box-preview-img">
                  <div class="img--product"><img src="{{asset('images/'.$phim->img)}}" width="200px" height="200px"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-9" style="text-align: center;">
            <button class="btn btn-sub" type="submit" value="Update">Update</button>
            <button class="btn btn-sub" type="reset" value="Reset">Reset</button>
          </div>
        </div>
      <form>
            <!-- /.container-fluid -->
  </div>
</div>

@endsection