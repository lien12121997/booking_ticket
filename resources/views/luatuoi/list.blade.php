@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Ages List </h2>
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
                            <th>Ages</th>
                            <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($luatuoi as $luatuoi)
                        <tr>
                            <td>{{$luatuoi -> id}}</td>
                            <td>{{$luatuoi -> name}}</td>
                            <!-- <td class="btn-action" style="width: 15%">
                                <p class="purple"><a href="update/{{$luatuoi -> id}}">
                                <i class="fa fa-edit"></i> View/Edit</a></p>
                            </td> -->
                            <td class="btn-action" style="width: 15%">
                                <p class="red"><a style="width: 105px;" href="delete/{{$luatuoi -> id}}">
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