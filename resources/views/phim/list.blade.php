@extends('layouts.app')

@section('content')

<div class="sidebar col-md-3">
    @include('layouts.sidebar')
</div>
<div class="content col-md-9">
    <h1 class="head--title">Danh Sách Phim</h1>
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
                <tr align="center">
                    <th>Code</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Date Start</th>
                    <th>Date End</th>
                    <th>Status</th>
                    <th>Length Of Time</th>
                    <th>Kinds</th>
                    <th>Ages</th>
                    <th colspan="2"><a href="insert">Add</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($phim as $phim)
                <tr>
                    <td>{{$phim -> id}}</td>
                    <td>{{$phim -> name}}</td>
                    <td><img src="{{asset('images/'.$phim->img)}}" width="100px"></td>
                    <td>{{$phim -> date_khoichieu}}</td>
                    <td>{{$phim -> date_ketthuc}}</td>
                    <td>{{$phim -> tinh_trang}}</td>
                    <td>{{$phim -> do_dai}}</td>
                    <td>{{$phim -> id_theloai}}</td>
                    <td>{{$phim -> id_luatuoi}}</td>
                    <td><a href="update/{{$phim -> id}}"> Update</a></td>
                    <td><a href="delete/{{$phim -> id}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection