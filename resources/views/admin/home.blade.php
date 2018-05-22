@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
      	<div class="x_panel">
        	<div class="x_title">
          		<h2>Page Administration </h2>
		        <ul class="nav navbar-right panel_toolbox">
		            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
		            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
		        </ul>
          		<div class="clearfix"></div>
        	</div>

        	<div class="x_content">
        		<div class="row x_title">
                  <div class="col-md-12">
                    <h2>Cinema Center <small>VinCom Center 8th floor, 379 Pham Ngoc Thach St</small></h2>
                  </div>
                </div>

        		<br>
	            <div>
	            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6603951980806!2d105.8295791643863!3d21.006246086010602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac7e53135d15%3A0xb6b47691ff422d73!2sVincom+Center!5e0!3m2!1svi!2s!4v1526705394602" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	            </div>
          	</div>
        </div>
    </div>
</div>

@endsection