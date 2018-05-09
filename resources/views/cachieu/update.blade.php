@extends('layouts.app')

@section('content')


<div class="sidebar col-md-3">
  @include('layouts.sidebar')
</div>
<div class="content col-md-9">

  <h1 class="head--title">Cập Nhật Ca Chiếu</h1>

    <div class="container-fluid">
      <form action="" method="POST" class="form-ins">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="col-md-12 col-lg-9">
              <div class="form-group">
                  <div class="product-title">Title</div>
                  <input class="form-control" name="name" placeholder="Enter Name" value="{{$cachieu -> name}}" />
              </div>
              <div class="form-group">
                  <div class="product-title">Time Start</div>
                  <input class="form-control" name="start" type="time" value="{{$cachieu -> start}} />
              </div>
              <div class="form-group">
                  <div class="product-title">Time End</div>
                  <input class="form-control" name="end" type="time" value="{{$cachieu -> end}}" />
              </div>
              <div class="col-md-9" style="text-align: center;">
                <button class="btn btn-sub" type="submit" value="Update">Update</button>
                <button class="btn btn-sub" type="reset" value="Reset">Reset</button>
              </div>
          </div>
        </div>
      <form>
            <!-- /.container-fluid -->
  </div>
</div>

@endsection