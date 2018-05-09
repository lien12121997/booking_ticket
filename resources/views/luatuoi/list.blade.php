@extends('layouts.app')

@section('content')

<div class="sidebar col-md-3">
    @include('layouts.sidebar')
</div>
<div class="content col-md-9">
    <h1 class="head--title">Danh Sách Lứa Tuổi</h1>
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
                @foreach($luatuoi as $luatuoi)
                <tr>
                    <td>{{$luatuoi -> id}}</td>
                    <td>{{$luatuoi -> name}}</td>
                    <td><a href="update/{{$luatuoi -> id}}"> Update</a></td>
                    <td><a href="delete/{{$luatuoi -> id}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection