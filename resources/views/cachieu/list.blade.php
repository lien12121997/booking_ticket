@extends('layouts.app')

@section('content')

<div class="sidebar col-md-3">
    @include('layouts.sidebar')
</div>
<div class="content col-md-9">
    <h1 class="head--title">Danh Sách Ca Chiếu</h1>
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
                <tr align="center">
                    <th>Code</th>
                    <th>Title</th>
                    <th>Time start</th>
                    <th>Time end</th>
                    <th colspan="2"><a href="insert">Add</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($cachieu as $cachieu)
                <tr>
                    <td>{{$cachieu -> id}}</td>
                    <td>{{$cachieu -> name}}</td>
                    <td>{{$cachieu -> start}}</td>
                    <td>{{$cachieu -> end}}</td>
                    <td><a href="update/{{$cachieu -> id}}"> Update</a></td>
                    <td><a href="delete/{{$cachieu -> id}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection