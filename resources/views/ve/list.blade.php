@extends('admin.layouts.master')

@section('content')
<div class="tabpanel" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Tickets</a>
        </li>
        <li role="presentation" class="">
            <a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Seats</a>
        </li>
    </ul>


    <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
            <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <br><br>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tickets</h2>
                            <table class="table table-hover">
                                <thead>
                                    <tr align="center">
                                        <th>No</th>
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
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Detail Tickets </h2>
                            <table class="table table-hover">
                                <thead>
                                    <tr align="center">
                                        <th>No</th>
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
        </div>

        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
            <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <br><p class="insert"><a href="../ghe/insert">Insert <i class="fa fa-plus-square"></i></a></p><br>
            </div>

            <div class="x_content">
                <table class="table table-hover">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th colspan="2" style="text-align: center; width: 30%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ghe as $ghe)
                        <tr>
                            <td>{{$ghe -> id}}</td>
                            <td>{{$ghe -> name}}</td>
                            <td>{{$ghe -> price}}</td>
                            <td class="btn-action">
                                <p class="purple"><a href="update/{{$ghe -> id}}"><i class="fa fa-edit"></i> View/Edit</a></p>
                            </td>
                            <td>
                                <p class="red"><a style="width: 105px; color: white; font-weight: bold" href="delete/{{$ghe -> id}}"><i class="fa fa-trash"></i> Delete</a></p>
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