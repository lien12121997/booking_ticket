@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>List </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <br><p class="insert"><a href="insert">Insert <i class="fa fa-plus-square"></i></a></p><br>
            </div>

            <div class="x_content">
                <table class="table table-hover">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Name</th>
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
                            <td class="btn-action" style="width: 15%">
                                <p class="purple"><a href="update/{{$cachieu -> id}}">
                                <i class="fa fa-edit"></i> View/Edit</a></p>
                            </td>
                            <td class="btn-action" style="width: 15%">
                                <p class="red"><a style="width: 105px;" href="delete/{{$cachieu -> id}}">
                                    <i class="fa fa-trash"></i> Delete</a></p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection