@extends('layouts.app')

@section('content')

<div class="sidebar col-md-3">
    @include('layouts.sidebar')
</div>
<div class="content col-md-9">
    <h1 class="head--title">Danh Sách Phòng Chiếu</h1>
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
                <tr align="center">
                    <th>Code</th>
                    <th>Title</th>
                    <th>Describe</th>
                    <th colspan="2"><a href="insert">Add</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($phongchieu as $phongchieu)
                <tr>
                    <td>{{$phongchieu -> id}}</td>
                    <td>{{$phongchieu -> name}}</td>
                    <td>{{$phongchieu -> desc}}</td>
                    <td><a href="update/{{$phongchieu -> id}}"> Update</a></td>
                    <td><a href="delete/{{$phongchieu -> id}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection