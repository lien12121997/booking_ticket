@extends('layouts.master')

@section('content')
<div class="container">  
    <div class="main-home">
        <div class="tab-menu" id="movie">
            <div class="col-md-12 main-tab">
                <ul class="nav nav-tabs tab">
                    <li>
                        <a data-id="#tab-title1" class="film-ing">Phim Đang Chiếu</a>
                    </li>
                    <li>
                        <a data-id="#tab-title2" class="film-ing">Phim Sắp Chiếu</a>
                    </li>
                </ul>
            </div>

            <div class="row tab-film" id="tab-title1">
                @foreach($search_key as $phim)
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

            <div class="row tab-film" id="tab-title2">
                @foreach($search_key as $film)
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="box-img">
                        <a href="{{url('item/'.$film->id)}}">
                            <img src="{{asset('images/'.$film->img)}}" class="img-position img-responsive">
                        </a>
                    </div>
                    <div class="box-desc">
                        <h4 style="font-weight: bold;">{{$film -> name}}</h4>
                        <p>Thời lượng: {{$film -> do_dai}} phút</p>
                        <p>Ngày khởi chiếu: {{$film -> date_khoichieu}}</p>
                    </div>
                    <a href="{{url('item/'.$film->id)}}" class="btn btn-sub">Mua Vé</a>
                </div>
                @endforeach
            </div>
        </div>

        <div class="tab-menu" id="event">
            <h1 class="ribbon">
               <strong class="ribbon-content">Khuyến Mại | Event</strong>
            </h1>

            <div class="flexslider" style="direction:rtl">
                  <ul class="slides">
                    @foreach($tintuc as $tintuc)
                    <li>
                      <a href="#"><img src="{{asset('images/'.$tintuc -> img)}}" height="400px"></a>
                    </li>
                    @endforeach
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
            </div>
        </div>
    </div>
</div> 

<script>
    $(document).ready(function()
    {
        function activeTab(obj)
        {
            $('#movie ul li').removeClass('active');
                $(obj).addClass('active');
                var id = $(obj).find('a').attr('data-id');
                $('.tab-film').hide();
                $(id) .show();
                }
                $('.tab li').click(function(){
                    activeTab(this);
                    return false;
                });
                activeTab($('.tab li:first-child'));
            });

            $(document).ready(function () { 
              $('.film-ing').on('click',function(){
                $('.film-ing').removeClass('act');
                $(this).addClass('act');
              });
    })
</script>

<script>
    function actTab(obj)
    {
        $('.nav-wrap ul li').removeClass('active');
        $(obj).addClass('active');
        var id = $(obj).find('a').attr('href');
        $('.tab-memu').hide();
        $(id) .show();
        
        $('.group li').click(function(){
            actTab(this);
            return false;
        });
        actTab($('.group li:first-child'));
    }
    
</script>
@endsection
