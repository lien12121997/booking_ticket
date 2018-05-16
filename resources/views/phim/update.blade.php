@extends('admin.layouts.master')

@section('content')

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Movies Edit </h2>
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
          <div class="col-md-8">
            <div class="col-md-12 form-group">
              <div class="product-title">Movie Name</div>
              <input class="form-control" name="name" value="{{$phim -> name}}" />
            </div>
            <div class="col-md-6 form-group ">
              <div class="product-title">Start Time</div>
              <input class="form-control" name="date_khoichieu" type="date" value="{{$phim -> date_khoichieu}}" />
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">End Time</div>
              <input class="form-control" name="date_ketthuc" type="date" value="{{$phim -> date_ketthuc}}" />
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">Status</div>
              <select class="form-control form-select" name="tinh_trang">
                <option value="1" @if($phim -> tinh_trang == 0) selected @endif> Comming Soon </option>
                <option value="0" @if($phim -> tinh_trang == 1) selected @endif> Now Showing </option>
              </select>
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">Length Of Time</div>
              <input class="form-control" name="do_dai" value="{{$phim -> do_dai}}" />
            </div>
            <div class="col-md-6 form-group">
              <div class="product-title">Kind</div>
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
              <div class="product-title">Age</div>
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
            <div class="col-md-12 form-group">
              <div class="product-title">Description</div>
              <textarea class="form-control" name="desc" rows="10px">{{$phim -> desc}}</textarea>
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
                  <img id="thumb" src="{{asset('images/'.$phim->img)}}" />
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-9" style="text-align: center;">
            <button class="btn btn-success" type="submit" value="Insert">Update</button>
            <button class="btn btn-primary" type="reset" value="Reset">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection