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
                    <th>User Code</th>
                    <th>Movie Schedule</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ve as $ve)
                <tr>
                    <td>{{$ve -> id}}</td>
                    <td>{{$ve -> id_user}}</td>
                    <td>{{$ve -> id_lichchieu}}</td>
                    <td>{{$ve -> qty}}</td>
                    <td>{{$ve -> price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection