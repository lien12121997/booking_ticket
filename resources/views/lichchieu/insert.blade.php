@extends('layouts.app')

@section('content')

<div class="sidebar col-md-3">
  @include('layouts.sidebar')
</div>
<div class="content col-md-9">

  <h1 class="head--title">Thêm Lịch Chiếu</h1>

    <div class="container-fluid">
      <form action="" method="POST" class="form-ins">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="col-md-12 col-lg-9">
            <div class="form-group">
              <div class="product-title">Phim</div>
              <select class="form-control form-select" name="id_phim">
                @foreach($phim as $phim)
                  <option value="{{$phim ->id}}">{{$phim->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <div class="product-title">Chất Lượng</div>
              <select class="form-control form-select" name="id_chatluong">
                @foreach($chatluong as $chatluong)
                  <option value="{{$chatluong ->id}}">{{$chatluong->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <div class="product-title">Phòng chiếu</div>
              <select class="form-control form-select" name="id_phongchieu">
                @foreach($phongchieu as $phongchieu)
                  <option value="{{$phongchieu ->id}}">{{$phongchieu->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <div class="product-title">Ca Chiếu</div>
              <select class="form-control form-select" name="id_cachieu">
                @foreach($cachieu as $cachieu)
                  <option value="{{$cachieu ->id}}">{{$cachieu->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-9" style="text-align: center;">
                <button class="btn btn-sub" type="submit" value="Insert">Insert</button>
                <button class="btn btn-sub" type="reset" value="Reset">Reset</button>
              </div>
          </div>
        </div>     
      <form>
            <!-- /.container-fluid -->
  </div>
</div>

@endsection