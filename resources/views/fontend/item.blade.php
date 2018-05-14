@extends('layouts.app')

@section('content')
<div class="main-home">
    <div class="row" id="search1"></div>
    <div class="row">
        @foreach($phim as $phim)
        <div class="col-md-6">
            <div class="box-item_img">
                <img src="{{asset('images/'.$phim->img)}}">
            </div>
        </div>
        <div class="col-md-6" style="padding-left: 30px;">
            <div class="box-desc">
                <h1 style="font-weight: bold;">{{$phim -> name}}</h1>
                <p style="padding-bottom: 20px;">{{$phim -> desc}}</p>
                <p style="padding-bottom: 15px;"><b>Tình trạng:</b>
                    @if($phim->tinh_trang == 1) 
                        Đang Chiếu
                    @elseif($phim->tinh_trang == 0)
                        Sắp Chiếu
                    @endif</p>
                <p style="padding-bottom: 15px;"><b>Thời lượng: </b> {{$phim -> do_dai}} phút</p>
                <p style="padding-bottom: 15px;"><b>Thể Loại: </b> {{$theloai}} </p>
                <p style="padding-bottom: 15px;"><b>Độ Tuổi: </b> {{$luatuoi}} </p>
                <p style="padding-bottom: 15px;"><b>Ngày khởi chiếu: </b> {{$phim -> date_khoichieu}}</p>
            </div>
        @endforeach
            <p><b>Lịch chiếu: </b></p> 
            @foreach($lichchieu as $lichchieu)
            <a href="{{url('booking/'.$lichchieu -> id)}}" class="btn btn-sub">Ca {{$lichchieu -> id_cachieu}}</a>
            @endforeach
        </div>
        
    </div>
</div>
@endsection
