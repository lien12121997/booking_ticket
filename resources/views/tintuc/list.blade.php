@extends('layouts.app')

@section('content')

<div class="sidebar col-md-3">
    @include('layouts.sidebar')
</div>
<div class="content col-md-9">
    <h1 class="head--title">Danh Sách Tin Tức</h1>
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
                <tr align="center">
                    <th>Code</th>
                    <th>Title</th>
                    <th>Describe</th>
                    <th>Image</th>
                    <th>Author</th>
                    <th>Kinds</th>
                    <th>Date</th>
                    <th colspan="2"><a href="insert">Add</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($tintuc as $tintuc)
                <tr>
                    <td>{{$tintuc -> id}}</td>
                    <td>{{$tintuc -> title}}</td>
                    <td>{{$tintuc -> content}}</td>
                    <td><img src="{{asset('images/'.$tintuc->img)}}" width="100px"></td>
                    <td>{{$tintuc -> author}}</td>
                    <td>{{$tintuc -> id_loaitin}}</td>
                    <td>{{$tintuc -> date}}</td>
                    <td><a href="update/{{$tintuc -> id}}"> Update</a></td>
                    <td><a href="delete/{{$tintuc -> id}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection