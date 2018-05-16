@extends('admin.layouts.master')

@section('content')
<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Show Time</a>
        </li>
        <li role="presentation" class="">
            <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Qualitys</a>
        </li>
        <li role="presentation" class="">
            <a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Rooms</a>
        </li>
        <li role="presentation" class="">
            <a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Time Frame</a>
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <br><p class="insert"><a href="insert">Insert <i class="fa fa-plus-square"></i></a></p><br>
            </div>

            <div>
                <table class="table table-hover">
                    <thead>
                        <tr align="center">
                            <th>Code</th>
                            <th>Phim</th>
                            <th>Chất Lượng</th>
                            <th>Phòng Chiếu</th>
                            <th>Ca Chiếu</th>
                            <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lichchieu as $lichchieu)
                        <tr>
                            <td>{{$lichchieu -> id}}</td>
                            <td>{{$lichchieu -> id_phim}}</td>
                            <td>{{$lichchieu -> id_chatluong}}</td>
                            <td>{{$lichchieu -> id_phongchieu}}</td>
                            <td>{{$lichchieu -> id_cachieu}}</td>
                            <td class="btn-action" style="width: 15%">
                                <p class="purple"><a href="update/{{$lichchieu -> id}}">
                                <i class="fa fa-edit"></i> View/Edit</a></p>
                            </td>
                            <td class="btn-action" style="width: 15%">
                                <p class="red"><a style="width: 105px;" href="delete/{{$lichchieu -> id}}">
                                    <i class="fa fa-trash"></i> Delete</a></p>
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
                <br><p class="insert"><a href="../chatluong/insert">Insert <i class="fa fa-plus-square"></i></a></p><br>
            </div>

            <div class="x_content">
                <table class="table table-hover">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Qualitys</th>
                            <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($chatluong as $chatluong)
                        <tr>
                            <td>{{$chatluong -> id}}</td>
                            <td>{{$chatluong -> name}}</td>
                            <!-- <td class="btn-action" style="width: 15%">
                                <p class="purple"><a href="../chatluong/update/{{$chatluong -> id}}">
                                <i class="fa fa-edit"></i> View/Edit</a></p>
                            </td> -->
                            <td class="btn-action" style="width: 15%">
                                <p class="red">
                                    <a style="width: 105px;" href="../chatluong/delete/{{$chatluong -> id}}">
                                    <i class="fa fa-trash"></i> Delete</a></p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
            <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <br><p class="insert"><a href="../phongchieu/insert">Insert <i class="fa fa-plus-square"></i></a></p><br>
            </div>

            <div>
                <table class="table table-hover">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Rooms</th>
                            <th>Describe</th>
                            <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($phongchieu as $phongchieu)
                        <tr>
                            <td>{{$phongchieu -> id}}</td>
                            <td>{{$phongchieu -> name}}</td>
                            <td>{{$phongchieu -> desc}}</td>
                            <!-- <td class="btn-action" style="width: 15%">
                                <p class="purple"><a href="../phongchieu/update/{{$phongchieu -> id}}">
                                <i class="fa fa-edit"></i> View/Edit</a></p>
                            </td> -->
                            <td class="btn-action" style="width: 15%">
                                <p class="red">
                                <a style="width: 105px;" href="../phongchieu/delete/{{$phongchieu -> id}}">
                                <i class="fa fa-trash"></i> Delete</a></p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
            <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <br><p class="insert"><a href="../cachieu/insert">Insert <i class="fa fa-plus-square"></i></a></p><br>
            </div>

            <div>
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
                            <!-- <td class="btn-action" style="width: 15%">
                                <p class="purple"><a href="../cachieu/update/{{$cachieu -> id}}">
                                <i class="fa fa-edit"></i> View/Edit</a></p>
                            </td> -->
                            <td class="btn-action" style="width: 15%">
                                <p class="red">
                                    <a style="width: 105px;" href="../cachieu/delete/{{$cachieu -> id}}">
                                    <i class="fa fa-trash"></i> Delete</a>
                                </p>
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