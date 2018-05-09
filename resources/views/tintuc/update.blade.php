@extends('layouts.app')

@section('content')

<div class="sidebar col-md-3">
  @include('layouts.sidebar')
</div>
<div class="content col-md-9">

  <h1 class="head--title">Thêm Tin Tức</h1>

    <div class="container-fluid">
      <form action="" method="POST" class="form-ins" enctype="multipart/form-data" id="upload">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="col-md-12 col-lg-9">
              <div class="form-group">
                  <div class="product-title">Title</div>
                  <input class="form-control" name="title" placeholder="Enter Name" value="{{$tintuc -> title}}" />
              </div>
              <div class="form-group">
                  <div class="product-title">Describe</div>
                  <textarea class="form-control" name="content">{{$tintuc -> content}}</textarea>
              </div>

              <div class="form-group">
                  <div class="product-title">Author</div>
                  <input class="form-control" name="author" placeholder="Enter Author" value="{{$tintuc -> author}}" />
              </div>
              <div class="form-group">
                  <div class="product-title">Kinds</div>
                  <select class="form-control form-select" name="id_loaitin">
                    @foreach($loaitin as $loaitin)
                    <option 
                      @if($tintuc -> id_loaitin == $loaitin -> id)
                        {{"selected"}}
                      @endif
                        value="{{$loaitin ->id}}">{{$loaitin->name}}
                      </option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <div class="product-title">Date</div>
                  <input class="form-control" name="date" type="date" value="{{$tintuc -> date}}" />
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
                  <div class="img--product"><img src="{{asset('images/'.$tintuc->img)}}" width="200px" height="200px"></div>
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