@extends('layouts.app')

@section('content')

<div class="sidebar col-md-3">
  @include('layouts.sidebar')
</div>
<div class="content col-md-9">

  <h1 class="head--title">Thêm Phim</h1>

    <div class="container-fluid">
      <form action="" method="POST" class="form-ins" id="upload" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="col-md-9">
            <div class="form-group form-text">
              <div class="product-title">Name</div>
              <input class="form-control" name="name" placeholder="Enter Name" />
            </div>

            <div class="col-md-6 form-group">
              <div class="product-title">Date Start</div>
              <input class="form-control" name="date_khoichieu" type="date" />
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">Date End</div>
              <input class="form-control" name="date_ketthuc" type="date" />
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">Status</div>
              <input class="form-control" name="tinh_trang" />
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">Length Of Time</div>
              <input class="form-control" name="do_dai"  />
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">Kinds</div>
              <select class="form-control form-select" name="id_theloai">
                @foreach($theloai as $theloai)
                  <option value="{{$theloai ->id}}">{{$theloai->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">Ages</div>
              <select class="form-control form-select" name="id_luatuoi">
                @foreach($luatuoi as $luatuoi)
                  <option value="{{$luatuoi ->id}}">{{$luatuoi->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group form-text">
              <div class="product-title">Description</div>
              <textarea class="form-control" name="desc"></textarea>
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
                <div class="box-preview-img"></div>
              </div>
            </div>
          </div>

          <div class="col-md-9" style="text-align: center;">
            <button class="btn btn-sub" type="submit" value="Insert">Insert</button>
            <button class="btn btn-sub" type="reset" value="Reset">Reset</button>
          </div>
        </div>
      <form>
            <!-- /.container-fluid -->
  </div>
</div>

@endsection