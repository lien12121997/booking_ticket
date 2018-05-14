@extends('admin.layouts.master')

@section('content')
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Change Password</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  	@if(session('error'))
		                <div class="alert alert-danger" role="alert" style=" margin-top: 20px;">
		                    {{session('error')}}      
		                </div>
		            @endif
                    <br />
                    <form id="demo-form2" method="POST" action="" class="form-horizontal form-label-left">
                    	<input type="hidden" name="_token" value="{{csrf_token()}}">
                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
	                        	Current Password <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                            <input type="password" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="passoldadmin">
	                        </div>
                      	</div>
                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
	                        	New Password <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                            <input type="password" id="last-name" required="required" class="form-control col-md-7 col-xs-12" name="passnewadmin" >
	                        </div>
                      	</div>
                     	<div class="ln_solid"></div>
                      	<div class="form-group">
	                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							  <button type="reset" class="btn btn-primary">Reset</button>
	                          <button type="submit" class="btn btn-success" value="{{ csrf_token() }}">
	                          	Submit</button>
	                        </div>
                      	</div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

@endsection