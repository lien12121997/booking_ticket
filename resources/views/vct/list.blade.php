@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>List Detail Tickets </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <br><br>
            </div>

            <div class="x_content">
                <table class="table table-hover" style="width: 65%">
                    <thead>
                        <tr align="center">
                            <th>Code</th>
                            <th>Ticket Code</th>
                            <th>Seats</th>
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
    </div>
</div>

@endsection