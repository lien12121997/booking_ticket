@extends('layouts.app')

@section('content')

<div class="sidebar col-md-3">
    @include('layouts.sidebar')
</div>
<div class="content col-md-9">
    <h1 class="head--title">Danh Sách Loại Ghế</h1>
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
                <tr align="center">
                    <th>Code</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th colspan="2"><a href="insert">Add</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($ghe as $ghe)
                <tr>
                    <td>{{$ghe -> id}}</td>
                    <td>{{$ghe -> name}}</td>
                    <td>{{$ghe -> price}}</td>
                    <td><a href="update/{{$ghe -> id}}"> Update</a></td>
                    <td><a href="delete/{{$ghe -> id}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection