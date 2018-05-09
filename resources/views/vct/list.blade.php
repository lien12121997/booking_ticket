@extends('layouts.app')

@section('content')

<div class="sidebar col-md-3">
    @include('layouts.sidebar')
</div>
<div class="content col-md-9">
    <h1 class="head--title">Danh Sách Vé Chi Tiết</h1>
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
                <tr align="center">
                    <th>Code</th>
                    <th>Ticket Code</th>
                    <th>Seats</th>
                    <th colspan="2"><a href="insert">Add</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($vct as $vct)
                <tr>
                    <td>{{$vct -> id}}</td>
                    <td>{{$vct -> id_ve}}</td>
                    <td>{{$vct -> so_ghe}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection