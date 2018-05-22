@extends('admin.layouts.master')

@section('content')
<div class="tabpanel" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Movies</a>
        </li>
        <li role="presentation" class="">
            <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Categorys</a>
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <br><p class="insert"><a href="insert">Insert <i class="fa fa-plus-square"></i></a></p><br>
            </div>

            <div>
                <table class="table table-hover">
                    <thead>
                        <tr align="center">
                            <th>Code</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Date Start</th>
                            <th>Date End</th>
                            <th>Status</th>
                            <th>Length Of Time</th>
                            <th>Kinds</th>
                            <th>Ages</th>
                            <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($phim as $phim)
                        <tr>
                            <td>{{$phim -> id}}</td>
                            <td>{{$phim -> name}}</td>
                            <td><img src="{{asset('images/'.$phim->img)}}" width="100px"></td>
                            <td>{{$phim -> date_khoichieu}}</td>
                            <td>{{$phim -> date_ketthuc}}</td>
                            <td>{{$phim -> tinh_trang}}</td>
                            <td>{{$phim -> do_dai}}</td>
                            <td>{{$phim -> id_theloai}}</td>
                            <td>{{$phim -> id_luatuoi}}</td>
                            <td class="btn-action">
                                <p class="purple"><a href="update/{{$phim -> id}}"><i class="fa fa-edit"></i> View/Edit</a></p>
                                <p class="red"><a style="width: 105px;" href="delete/{{$phim -> id}}"><i class="fa fa-trash"></i> Delete</a></p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
            <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <br><p class="insert"><a href="../theloai/insert">Insert <i class="fa fa-plus-square"></i></a></p><br>
            </div>

            <div class="x_content">
                <table class="table table-hover">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Categorys</th>
                            <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($theloai as $theloai)
                        <tr>
                            <td>{{$theloai -> id}}</td>
                            <td>{{$theloai -> name}}</td>
                            <!-- <td class="btn-action" style="width: 15%">
                                <p class="purple"><a href="update/{{$theloai -> id}}">
                                <i class="fa fa-edit"></i> View/Edit</a></p>
                            </td> -->
                            <td class="btn-action" style="width: 15%">
                                <p class="red"><a style="width: 105px;" href="delete/{{$theloai -> id}}">
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