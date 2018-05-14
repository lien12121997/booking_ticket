@extends('layouts.master')

@section('content')
<div class="container">  
    <div class="main-home">
        <div class="col-md-12">
            <h1 class="movie-selection">movie selection</h1>
        </div>
        <div class="tab-menu" id="movie">
            <div class="row tab-film" id="tab-title1">
                @foreach($phim as $phim)
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="box-img">
                        <a href="{{url('item/'.$phim->id)}}">
                            <img src="{{asset('images/'.$phim->img)}}" class="img-position img-responsive">
                        </a>
                    </div>
                    <div class="box-desc">
                        <h4 style="font-weight: bold;">{{$phim -> name}}</h4>
                        <p>Thời lượng: {{$phim -> do_dai}} phút</p>
                        <p>Ngày khởi chiếu: {{$phim -> date_khoichieu}}</p>
                    </div>
                    <a href="{{url('item/'.$phim->id)}}" class="btn btn-sub">Mua Vé</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div> 
@endsection
