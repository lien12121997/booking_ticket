@extends('admin.layouts.master')

@section('content')

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Edit New  </h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
          <li><a class="close-link"><i class="fa fa-close"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
      <br />
      <form action="" method="POST" class="form-ins" enctype="multipart/form-data" id="upload">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="col-md-12 col-lg-8">
              <div class="form-group">
                  <div class="product-title">Title</div>
                  <input class="form-control" name="title" placeholder="Enter Name" value="{{$tintuc -> title}}" />
              </div>
              <div class="form-group">
                  <div class="product-title">Describe</div>
                  <textarea class="form-control" name="content" rows="10px">
                    {{$tintuc -> content}}
                  </textarea>
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
              <div class="form-group form--img">
                <input type="file" name="file" class="file hidden" id="imageUpload" multiple onchange="previewImg(event);">
                <button class="browse btn btn-img" type="button">
                  <img src="{{ asset('images/Layer2.png') }}">
                </button>
              </div>
              <div class="form-group form--img">
                <div class="img--product box-preview-img">
                  <img id="thumb" src="{{asset('images/'.$tintuc->img)}}" />
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-9" style="text-align: center;">
            <button class="btn btn-success" type="submit" value="Update">Update</button>
            <button class="btn btn-primary" type="reset" value="Reset">Reset</button>
          </div>
        </div>
      <form>
    </div>
  </div>
</div>
</div>


@endsection