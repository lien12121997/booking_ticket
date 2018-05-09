@extends('layouts.app')

@section('content')

<div class="sidebar col-md-3">
    @include('layouts.sidebar')
</div>
<div class="content col-md-9">
    <h1 class="head--title">Danh Sách Thể Loại</h1>
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
                <tr align="center">
                    <th>Code</th>
                    <th>Title</th>
                    <th colspan="2"><a href="insert">Add</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($theloai as $theloai)
                <tr>
                    <td>{{$theloai -> id}}</td>
                    <td>{{$theloai -> name}}</td>
                    <td><a href="update/{{$theloai -> id}}"> Update</a></td>
                    <td><a href="delete/{{$theloai -> id}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection