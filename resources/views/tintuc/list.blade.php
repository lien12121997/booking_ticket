@extends('admin.layouts.master')

@section('content')
<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Movies</a>
        </li>
        <li role="presentation" class="">
            <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Type Of News</a>
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
                            <th>No</th>
                            <th style="width: 12%">Title</th>
                            <th style="width: 35%">Describe</th>
                            <th>Image</th>
                            <th>Author</th>
                            <th>Kinds</th>
                            <th>Date</th>
                            <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tintuc as $tintuc)
                        <tr style="height: 50px; overflow-x: hidden;">
                            <td>{{$tintuc -> id}}</td>
                            <td>{{$tintuc -> title}}</td>
                            <td>{{$tintuc -> content}}</td>
                            <td><img src="{{asset('images/'.$tintuc->img)}}" width="100px"></td>
                            <td>{{$tintuc -> author}}</td>
                            <td>{{$tintuc -> id_loaitin}}</td>
                            <td>{{$tintuc -> date}}</td>
                            <td class="btn-action">
                                <p class="purple"><a href="update/{{$tintuc -> id}}"><i class="fa fa-edit"></i> View/Edit</a></p>
                                <p class="red"><a style="width: 105px;" href="delete/{{$tintuc -> id}}"><i class="fa fa-trash"></i> Delete</a></p>
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
                <br><p class="insert"><a href="../loaitin/insert">Insert <i class="fa fa-plus-square"></i></a></p><br>
            </div>

            <div>
                <table class="table table-hover">
                    <thead>
                    <tr align="center">
                        <th>Code</th>
                        <th>Title</th>
                        <th colspan="2" style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loaitin as $loaitin)
                    <tr>
                        <td>{{$loaitin -> id}}</td>
                        <td>{{$loaitin -> name}}</td>
                        <!-- <td class="btn-action" style="width: 15%">
                            <p class="purple"><a href="../loaitin/update/{{$loaitin -> id}}">
                                <i class="fa fa-edit"></i> View/Edit</a></p>
                        </td> -->
                        <td class="btn-action" style="width: 15%">
                            <p class="red">
                                <a style="width: 105px;" href="../loaitin/delete/{{$loaitin -> id}}">
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


<h2>John W. Hutchinson 80’s Birthday Celebration (Morning session)</h2>
<div class="text-hour-nh">
    <span style="color: #083e81;"><strong>9:00 am to 10:40 am </strong></span>     
    <p><strong>Presentation 43 - 47</strong></p>
</div>
<div class="text-hour-n">
    <span style="color: #083e81;"><strong>10:40 am to 11:10 am</strong></span>     
    <p><strong>Tea Break</strong></p>
</div>
<div class="text-hour-nh">
    <span style="color: #083e81;"><strong>11:10 am to 1:00 pm</strong></span>     
    <p><strong>Presentation 48 - 52</strong></p>
</div>
<div class="text-hour-n">
    <span style="color: #083e81;"><strong>1:00 pm to 2:00 pm</strong></span>        
    <p><strong>Lunch</strong></p>
</div>

<h2>John W. Hutchinson 80’s Birthday Celebration (Afternoon Session)</h2>
<div class="text-hour-nh">
    <span style="color: #083e81;"><strong>2:00 pm to 5:40 pm</strong></span>       
    <p><strong>Presentation 53 - 58</strong></p>
<div>
<div class="text-hour-n">
    <span style="color: #083e81;"><strong>3:40 pm to 4:10 pm</strong></span>        
    <p><strong>Tea Break</strong></p>
</div>
<div class="text-hour-nh">
    <span style="color: #083e81;"><strong>4:10 pm to 5:45 pm </strong></span>       
    <p><strong>Presentation 59 - 62</strong></p>
</div>
<div class="text-hour-n">
    <span style="color: #083e81;"><strong>5:45 pm to 6:00 pm</strong></span>       
    <p><strong>Speech by John W Hutchinson</strong></p>
</div>

<h2>>Closing ceremony and Dinner</h2>
<div class="text-hour-nh">
    <span style="color: #083e81;"><strong>7:00 pm to 7:10 pm</strong></span>       
    <p><strong>Closing address by Professor Alfred Huan</strong></p>
<div>
<div class="text-hour-n">
    <span style="color: #083e81;"><strong>7:10 pm to 7:20 pm</strong></span>        
    <p><strong>Closing address by Professor Alan Needleman</strong></p>
</div>
<div class="text-hour-nh">
    <span style="color: #083e81;"><strong>6:20 pm to 7:30 pm</strong></span>       
    <p><strong>Closing address by Professor Huang Yonggang</strong></p>
</div>
<div class="text-hour-n">
    <span style="color: #083e81;"><strong>7:30 pm to 9:30 pm</strong></span>       
    <p><strong>Dinner</strong></p>
</div>


