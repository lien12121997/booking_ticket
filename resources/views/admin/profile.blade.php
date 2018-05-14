@extends('admin.layouts.master')

@section('content')
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin - {{$admin -> name}}</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{asset('img/useradmin.png')}}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-8 col-sm-8 col-xs-12" style="margin-left: 35px">
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                          </li>
                        </ul>

                        <div style="margin-top: 30px;">
                            <table class="table">
                              <thead>
                                <tr>
                                  <td><b>Administrator</b></td>
                                  <td>{{$admin -> name}}</td>
                                </tr>
                                <tr>
                                  <td><b>Email - Address</b></td>
                                  <td>{{$admin -> email}}</td>
                                </tr>
                              </thead>
                            </table>
                        </div>
                      </div>
                    </div><!-- end col-md-->

                  </div>
                </div>
              </div>
            </div>
                   
@endsection