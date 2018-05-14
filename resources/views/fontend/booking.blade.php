
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Movie Ticket Booking Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Movie Ticket Booking Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="{{asset('css/css2/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<script src="{{asset('js/js2/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('js/js2/jquery.seat-charts.js')}}"></script>
</head>
<body>
<div class="content">
	<h1>Movie Ticket Booking Widget</h1>
	<div class="main">
		<h2>Multiplex Theatre Showing Screen</h2>
		<div class="demo">
			<div id="seat-map">
				<div class="front">SCREEN</div>					
			</div>
		<form action="{!! URL::route('booking') !!}" method="POST">
			{{ csrf_field() }}
			@foreach($datve as $datve)
			<div class="booking-details">
				<ul class="book-left">
					<li>Quality</li>
					<li>Time </li>
					<li>Tickets</li>
					<li>Total</li>
					<li>Seats :</li>
				</ul>
				<ul class="book-right">
					<li>: {{$datve->name}}</li>
					<input type="hidden" name="id_user" value="{{$users->id}}">
					<input type="hidden" id="id-lichchieu" name="id_lichchieu" value="{{$datve->id}}">
					<li>: <span>April 3, 21:00</span></li>
					<li>: <textarea id="counter" name="qty"></textarea></li>
					<li>: <b><i>$</i><textarea id="total" name="price"></textarea></b></li>
				</ul>
				<div class="clear"></div>
				<ul id="selected-seats" class="scrollbar scrollbar1"></ul>
			
						
				<button class="checkout-button">Book Now</button>	
				<div id="legend"></div>
			</div>
			@endforeach
		</form>
			<div style="clear:both"></div>
	    </div>

			<script type="text/javascript">
				var price = 65000; //price
				$(document).ready(function() {
					var $cart = $('#selected-seats'), //Sitting Area
					$counter = $('#counter'), //Votes
					$total = $('#total'), //Total money
					id = document.getElementById("id-lichchieu").value;
					
					var sc = $('#seat-map').seatCharts({
						map: [  //Seating chart
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'__________',
							'aaaaaaaa__',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'__aaaaaa__'
						],
						naming : {
							top : false,
							getLabel : function (character, row, column) {
								return column;
							}
						},
						legend : { //Definition legend
							node : $('#legend'),
							items : [
								[ 'a', 'available',   'Available' ],
								[ 'a', 'unavailable', 'Sold'],
								[ 'a', 'selected', 'Selected']
							]					
						},
						click: function () { //Click event
							if (this.status() == 'available') { //optional seat
								$('<input name="so_ghe[]" value="'+(this.settings.row+1)+'_'+this.settings.label+'" readonly="readonly"/>')
									.attr('id', 'cart-item-'+this.settings.id)
									.data('seatId', this.settings.id)
									.appendTo($cart);

								$counter.text(sc.find('selected').length+1);
								$total.text(recalculateTotal(sc)+price);
											
								return 'selected';
							} else if (this.status() == 'selected') { //Checked
									//Update Number
									$counter.text(sc.find('selected').length-1);
									//update totalnum
									$total.text(recalculateTotal(sc)-price);
										
									//Delete reservation
									$('#cart-item-'+this.settings.id).remove();
									//optional
									return 'available';
							} else if (this.status() == 'unavailable') { //sold
								return 'unavailable';
							} else {
								return this.style();
							}
						}
					});
					//sold seat
					$.ajax({
                        type: 'GET',
                        url: '../showGhe/' +id,
                        cache: false,
                        data: {"id": id},
                        dataType: 'json',
                        success: function (response) {
                            console.log(id);
                            console.log(response);
                            var array = response;
                            console.log(array);
                            array.forEach(function(element) {
                              console.log(element);
                              sc.get([element]).status('unavailable');
                            });                    
                        }
                    });
						
				});
				//sum total money
				function recalculateTotal(sc) {
					var total = 0;
					sc.find('selected').each(function () {
						total += price;
					});
							
					return total;
				}
			</script>
	</div>
	<p class="copy_rights">&copy; 2016 Movie Ticket Booking Widget. All Rights Reserved | Design by NTL</p>
</div>
<script src="{{asset('js/js2//jquery.nicescroll.js')}}"></script>
<script src="{{asset('js/js2//scripts.js')}}"></script>
</body>
</html>
