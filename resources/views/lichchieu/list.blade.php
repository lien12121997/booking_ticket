@extends('layouts.app')

@section('content')

<div class="sidebar col-md-3">
    @include('layouts.sidebar')
</div>
<div class="content col-md-9">
    <h1 class="head--title">Danh Sách Lịch Chiếu</h1>
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
                <tr align="center">
                    <th>Code</th>
                    <th>Phim</th>
                    <th>Chất Lượng</th>
                    <th>Phòng Chiếu</th>
                    <th>Ca Chiếu</th>
                    <th colspan="2"><a href="insert">Add</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($lichchieu as $lichchieu)
                <tr>
                    <td>{{$lichchieu -> id}}</td>
                    <td>{{$lichchieu -> id_phim}}</td>
                    <td>{{$lichchieu -> id_chatluong}}</td>
                    <td>{{$lichchieu -> id_phongchieu}}</td>
                    <td>{{$lichchieu -> id_cachieu}}</td>
                    <td><a href="update/{{$lichchieu -> id}}"> Update</a></td>
                    <td><a href="delete/{{$lichchieu -> id}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection