<!DOCTYPE html>
<html lang="en">
<head>
<title>VietNamLestGo.info</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="VietNam Travel" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	
	
	<!-- pop up box -->
	<link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop up box -->

	<script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('css/jquery.desoslide.css')}}">

	<!-- css files -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}" />
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
	<!-- //web-fonts -->
	<script type="text/javascript">
					function email_sub(){
						var email=$("#email").val();
						if(email!="")
						{
						$.ajax({
								type:'get',
								dataType:'html',
								url:'<?php echo url('email_sub'); ?>',
								data:"email="+email,
								success:function(response){
									console.log(response);
									$("header").append('<div class="col-md-4 offset-md-4 col-xs-10 close-box" id="email_notice" style=""><h3 class="mx-2">Congrats!<a><i onclick="closediv()">&times;</i></a><br>Thanks for yor subscribe</h3><br><br><br><br><br></div>');
									$("#email").val("");
								},
								error:function(response){
									$("header").append('<div class="col-md-4 offset-md-4 col-xs-10 close-box" id="notice" style=""><h3 class="mx-2">Notice!<a><i onclick="closediv()">&times;</i></a><br>This Email has register before</h3><br><br><br><br><br></div>');
								}
							});
					    }
					}
					function closediv(){
						$(".close-box").slideUp(1000);
					}
				</script>
</head>

<body>
<!--Header-->

			@if(Session::has('notice'))
				<div class="alert {!!session('notice')['class']!!} alert-dismissible">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    {!!session('notice')['content']!!}
	 			 </div>
 			 @endif
<header>
	<div class="container agile-banner_nav">
		<div class="row header-top">
			<div class="col-md-6 top-left p-0">
				<p><i class="fa fa-map-marker" aria-hidden="true"></i> Saigon, VietNam-wonderful city.
			</div>
			<div class="col-md-6 ">
						<input type="text" class="form-control input-sm search" autocomplete name="" placeholder="Search...">
						<i class="icon-search fa fa-search"></i>
						<div class=" col-md-12 search-result"></div>
				
				<script>
					$(function(){
						$(".search").on('keyup',function(){
							var search=$(this).val();
							$.ajax({
								type:'get',
								dataType:'html',
								url:'<?php echo url('search'); ?>',
								data:"search="+search,
								success:function(response){
									$(".search-result").html(response);
									$(".search-result").show(100);
								}
							});
						});
					});
				</script>
				<script type="text/javascript">
					$(document).mouseup(function(e) 
{
					    var container = $(".search-result");
					    if (!container.is(e.target) && container.has(e.target).length === 0) 
					    {
					        container.hide();
					    }
					});
				</script>
			</div>
		</div>
	
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			
			<h1><a class="navbar-brand" href="{{route('home.page')}}">VietNamLestGo.info</a></h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{route('home.page')}}">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('stories')}}">Stories</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('gallery')}}">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('notes')}}">Notes</a>
					</li>
					<li class="nav-item pr-lg-0">
						<a class="nav-link pr-lg-0" href="{{route('contact')}}">Contact</a>
					</li>
				</ul>
			</div>
		  
		</nav>
	</div>
</header>
<!--Header-->
	



		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					@foreach($banners as $banner)
					<li>
						<div class="banner-top" style="background: url('{{$banner->img}}') no-repeat 0px 0px;">
						<div class="layer">
							<div class="container">
								<div class="banner-info_agile_w3ls">
									<h2>{!!$banner->title!!}</h2>
									<p>Bring VietNam to you.</p>
									<a href="{{route('gallery')}}" class="mr-2">GO<i class="fa fa-caret-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="clearfix"> </div>

			
		
		<!-- To bottom button-->
		<div class="thim-click-to-bottom">
			<div class="rotate">
				<a >
					<i class="fa fa-ellipsis-v"></i>
				</a>
			</div>
		</div>
		<!-- //To bottom button-->
		</div>
		<!--//Slider-->
<!-- welcome -->
	<div class="container box py-3 trend">
	<h3 class="heading text-center my-md-2 ">Trend</h3>
	<p class="font-italic text-center">This Season Should Be Go...</p>
	<hr class="border w-25">
		<div class="row welcome-grids px-3">
			<div class="col-lg-6">
				<?php $trend=DB::table('stories')->select('title','img','content')->where('trend',1)->first();?>
				
				<h3 class="title-trend">{{$trend->title}}</h3>
				<p class="my-4">{{shortcut($trend->content,0,500)}}</p>
				<a href="{{route('detail',str_replace(' ','-',$trend->title))}}" class=" btn-box">Read More</a>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5 welcome-grid3">
				<div class="position">
					<img src="{{asset($trend->img)}}" alt="" class="img-fluid" />
				</div>
			</div>
		</div>
	</div>
<!-- //welcome -->

<!-- /hot places -->
	<div class="container box py-3">
		<h3 class="heading text-center mb-2">Hot Places<hr class="w-25 border"></h3>
		<div class="row agile_inner_info">
			@foreach($hots as $hot)
			<div class="col-lg-4 col-md-6 w3_agile_services_grid px-2">
				<div class="agile_services_grid">
					<div class="hover06 column">
						<div>
							<figure><img src="{{asset($hot->img)}}" alt=" " class="img-responsive"></figure>
						</div>
					</div>
				</div>
				<h4><a href="{{route('detail',str_replace(' ','-',$hot->title))}}" title="">{{$hot->title}}</a></h4>
				<p>{{shortcut($hot->content,0,80)}}</p>
			</div>
			@endforeach
		</div>
		<div class="mx-auto mt-lg-4 mt-5 text-center">
				<a href="{{route('stories')}}" class="explore-button btn-box">Explore all</a>
			</div>
	</div>
<!-- //hot places -->
<div class="container box py-3">
	<h3 class="text-center heading mb-5">Hot Regions
		<hr class="border w-25"></h3>
	<div class="row gallery-info">
		<?php $lists=DB::table('galleries')->select('id','name','img')->skip(0)->take(3)->get(); ?>
		@foreach($lists as $list)
			<div class="col-md-4 gallery-grids px-2">
				<div class="galry-grid grid-top-rgt">
					<a href="{{route('list',str_replace(' ','-',$list->name))}}" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Travel Destinations">
						<img src="{{asset($list->img)}}" alt="" class="img-responsive zoom-img">
						<div class="w3agile-text w3agile-text-small1">
							<h5>{{$list->name}}</h5>
						</div>
					</a>
				</div>
			</div>
			@endforeach
			<div class="mx-auto mt-lg-4 mt-5 text-center">
				<a href="{{route('gallery')}}" class="explore-button  btn-box">View all</a>
			</div>
	</div>
	
</div>
<!--/middle-->
<!-- profile -->
	<div class="team">
	   <div class="agile_dot_info two">
		<div class="container">
		<h3 class="heading text-center mb-2">My Profile<hr class="w-25 border"></h3>

			<div class="row agileits_team_grids">
				<div class="col-lg-3 offset-lg-3 col-sm-12 agileits_team_grid">
					<center>
					<div class="agileits_team_grid_figure">
						<img src="{{asset('images/b1.jpg')}}" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"></div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					</center>
				</div>
				<div class="col-lg-3 profile">
					<p>Name: <span>Thieu Sumo</span></p>
					<p>Thích thì phượt</p></div>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpetandsen.com1%2F&tabs=messages&width=0&height=0&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=526578857783756" width="0" height="0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			</div>
		</div>
	</div>
</div>
<!-- //profile -->
	
<!-- footer -->
<footer class="">
	<div class="container py-md-3">
	<h4 class="text-center" style="color:#02b9c1">VietNamLestGo.info</h4>
		<div class="subscribe-grid text-center">
			<h5>Subscribe for our latest updates</h5>
			<i>
				<input class="form-control" type="email" placeholder="Subscribe" id="email" name="email" required="">
				<button onclick="email_sub()" class="btn1">
					<i class="fa fa-paper-plane"></i>
				</button>
				
			</i>
		</div>
		<div class="row container footer">
			<div class=" col-md-3  footer-right">
				<div class=" row">
					<div class="col-md-6 col-sm-6">
						<ul>
							<li><a href="{{route('home.page')}}" title="">Home</a></li>
							<li><a href="{{route('about')}}" title="">About</a></li>
							<li><a href="{{route('stories')}}" title="">Stories</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-6">
						<ul>
							<li><a href="{{route('gallery')}}" title="">Gallery</a></li>
							<li><a href="{{route('notes')}}" title="">Notes</a></li>
							<li><a href="{{route('contact')}}" title="">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 footer-center">
				<?php $galleries=DB::table('galleries')->select('name');
					$count=$galleries->count();
					$nguyen=round($count/4);
					$galleries1=$galleries->skip(0)->take($nguyen)->get();
					$galleries2=$galleries->skip($nguyen)->take($nguyen)->get();
					$galleries3=$galleries->skip(2*$nguyen)->take($nguyen)->get();
					$galleries4=$galleries->skip(3*$nguyen)->take($count-3*$nguyen)->get();
				?>
				<div class=" row">
					<div class="col-md-3 col-sm-6">
						<ul>
							@foreach($galleries1 as $gallery1)
							<li><a href="{{route('list',str_replace(' ','-',$gallery1->name))}}" title="">{{$gallery1->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<ul>
							@foreach($galleries2 as $gallery2)
							<li><a href="{{route('list',str_replace(' ','-',$gallery2->name))}}" title="">{{$gallery2->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<ul>
							@foreach($galleries3 as $gallery3)
							<li><a href="{{route('list',str_replace(' ','-',$gallery3->name))}}" title="">{{$gallery3->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<ul>
							@foreach($galleries4 as $gallery4)
							<li><a href="{{route('list',str_replace(' ','-',$gallery4->name))}}" title="">{{$gallery4->name}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpetandsen.com1%2F&tabs=messages&width=0&height=0&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=526578857783756" width="0" height="0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<section class="copyright text-center">
	<div class="container">©VietNamLestGo.info | Design by T.ms</div>
</section>
<!-- //copyright -->

<!-- js-scripts -->		

	<!-- js --><!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script> 
	<!-- //js -->
	
	<!-- desoslide-JavaScript -->
	<script src="{{asset('js/jquery.desoslide.js')}}"></script>
	<script>
		$('#demo1_thumbs').desoSlide({
			main: {
				container: '#demo1_main_image',
				cssClass: 'img-responsive'
			},
			effect: 'sideFade',
			caption: true
		});
	</script>

	<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
			});
		</script>
	<!-- //Calendar -->
	
	<!-- banner slider -->
	<script src="{{asset('js/responsiveslides.min.js')}}"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->
	
	<!--pop-up-box -->
	<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!-- //pop-up-box -->

	<!-- start-smoth-scrolling -->
	<script src="{{asset('js/SmoothScroll.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
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
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>