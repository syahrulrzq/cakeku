<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Cakeku</title>
<link href="{{url('master/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('master/js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{url('master/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Couchs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,700,500' rel='stylesheet' type='text/css'>
<!--flexslider-->
<link rel="stylesheet" href="{{url('master/css/flexslider.css')}}" type="text/css" media="screen" />
<!--//flexslider-->
<link rel="stylesheet" href="{{url('master/css/lightbox.css')}}">


</head>
<body>
<!--header-->
<div class="header">
	<div class="container">
		<!---->
			<div class="header-logo">
				<div class="logo">
					<a href="{{url('/welcome')}}"><img src="{{url('master/images/logocake.png')}}" alt="" ></a>
				</div>
				<div class="top-nav">
					<span class="icon"><img src="{{url('master/images/menu.png')}}" alt=""> </span>
					<ul><li><a href="{{url('/pesan')}}" class="scroll" data-hover="Custom Order">Custom Order</a></li>
						<li><a href="#gallery" class="scroll" data-hover="Gallery" >Gallery</a></li>
						<li><a href="{{url('/order')}}" class="scroll" data-hover="Cek Order">Cek Order</a></li>
						<li ><a href="{{url('/admin/pesanan')}}" class="scroll" data-hover="Admin">Admin</a> </li>
					</ul>
						<!--script-->
						<script>
							$("span.icon").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
							});
						</script>				
				</div>
				<div class="clearfix"> </div>
			</div>
			<!---->
				<div class="top-menu">					
					<ul>
						<li><a href="{{url('/pesan')}}" class="scroll" data-hover="Custom Order ">Custom Order </a></li>
						<li><a href="#gallery" class="scroll" data-hover="Gallery" >Gallery</a></li>
						<li><a href="{{url('/')}}"><img src="{{url('master/images/logocake.png')}}" alt="" ></a></li>
						<li><a href="{{url('/order')}}" class="scroll" data-hover="Cek Order">Cek Order</a></li>
						<li ><a href="{{url('/admin/pesanan')}}" class="scroll" data-hover="Admin">Admin</a> </li>
						
						<div class="clearfix"></div>
					</ul>
				</div>
					<!--script-->
					 <div class="banner">
						<section class="slider">
							<div class="flexslider">
								<ul class="slides">
									<li>
										<div class="banner-matter">
											<h3>Lorem Ipsum is simply dummy text of the printing and typesetting </h3>
											<a href="#" class="hvr-rectangle-out">Read More</a>
										</div>
									</li>
									<li>
										<div class="banner-matter">
											<h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  </h3>
											<a href="#" class="hvr-rectangle-out">Read More</a>
										</div>
									</li>
									<li>
										<div class="banner-matter">
											<h3>Lorem Ipsum is simply dummy text of the printing and typesetting </h3>
											<a href="#" class="hvr-rectangle-out">Read More</a>
										</div>
									</li>
								</ul>
							</div>
						</section>
							<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
												<!--FlexSlider-->
									<script defer src="{{url('js/jquery.flexslider.js')}}"></script>
									<script type="text/javascript">
											$(function(){
												SyntaxHighlighter.all();
												});
											$(window).load(function(){
											$('.flexslider').flexslider({
												animation: "slide",
												start: function(slider){
												$('body').removeClass('loading');
													}
													});
												});
									</script>
			
					</div>				
	</div>
</div>
<!--//header-->


<!--//Cool-->
<!--welcome-->
<div class="welcome-btm" id="about">
		<div class="container">
		<h3>About</h3>
		<div class="col-md-4 wel-rt">
			<img src="master/images/1.jpg" class="img-responsive" alt="">
		</div>
		<div class="col-md-8 we-lf">
			   	<p>Cake is often served as a celebratory dish on ceremonial occasions, such as weddings, anniversaries, and birthdays. There are countless cake recipes; some are bread-like, some are rich and elaborate, and many are centuries old. Cake making is no longer a complicated procedure; while at one time considerable labor went into cake making (particularly the whisking of egg foams), baking equipment and directions have been simplified so that even the most amateur cook may bake a cake. </p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!--//welcome-->
<!--gallery-->
	<div class="gallery" id="gallery">		
		<div class="container">
			<h3>Our Gallery</h3>
			<div class="gallery-grids">				
				@foreach($kue as $value)
				<div class="col-md-4 port-grids view view-fourth">
					<a class="example-image-link" href="{{ url('userkue/'.$value->id) }}" data-lightbox="example-set" data-title="">
						<img src="{{ url('img/'.$value->gambar_pemesanan) }}" class="img-responsive" alt=""/>
						<div class="mask">
							<p>{{ $value->nama }}</p>
						</div>
					</a>
				</div>
				@endforeach
				<div class="clearfix"> </div>	
				<script src="{{asset('js/lightbox-plus-jquery.min.js')}}"> </script>
			</div>
			<div>
			{!! $kue->render() !!}
			</div>			
		</div>
	</div>	
<!--//gallery-->


<!--contact-->
	<div class="contact" id="contact">
		<div class="container">
		<h3>Contact</h3>
			<div class="col-md-8 contact-form">
				<form>
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<div class="col-md-6 cnt-inpt">
						<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					</div>
					<div class="col-md-6 cnt-inpt">
						<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
					</div>
					<div class="clearfix"> </div>
					<textarea onfocus="this.value = '' ;" onblur="if (this.value == '') {this.value = 'Message...';}" required=""> Message... </textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="col-md-4 addres">
				<div class="ad">
					<h4>Address</h4>
					<address>
						Jl Otista 2<br>
						Gang Mangga No.29 RT.003 RW.03<br>
						<abbr title="Phone">Phone :</abbr> (021) 9915 7715
					</address>
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2615722840055!2d106.86392131419875!3d-6.229205395490843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f37630b95ecf%3A0xcef68c5d98ecda0f!2sGg.+Magga%2C+Kp.+Melayu%2C+Jatinegara%2C+Kota+Jakarta+Timur%2C+Daerah+Khusus+Ibukota+Jakarta!5e0!3m2!1sid!2sid!4v1463456758030" width="" height="" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
<!--//contact-->
<!--copy-->
<div class="copy">
		<div class="container">
			<div class="copy-left">
				<p>Copyright © 2016 Couchs. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="#" class="fb"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#" class="gg"></a></li>
					<li><a href="#" class="pn"></a></li>					
				</ul>	
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
<!--//copy-->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
       <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
</body>
</html>
