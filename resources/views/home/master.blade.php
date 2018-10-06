<!DOCTYPE html>
<html lang="en">
<head>
<title>VietNamLestGo.info</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="VietNam Travel, VietNam Exprience travel,..." />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->	
	<!-- css files -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
	<script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
	@yield('search')
	@yield('js')
	<script>
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
	

	<!-- //web-fonts -->
	
</head>

<body>
			@if(Session::has('notice'))
				<div class="alert {!!session('notice')['class']!!} alert-dismissible">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    {!!session('notice')['content']!!}
	 			 </div>
 			 @endif

			@if ($errors->any())
			    <div class="alert alert-danger alert-dismissible">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
<!--Header-->
<header>
	<div class="container agile-banner_nav">
		<div class="row header-top">
			<div class="col-md-6 top-left p-0">
				<p class="align-middle"><i class="fa fa-map-marker" aria-hidden="true"></i> Saigon, VietNam-wonderful city.
			</div>
			<div class="col-md-6 ">
						<input type="search" class="form-control input-sm search" autocomplete name="" placeholder="Search...">
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
					<li class="nav-item">
						<a class="nav-link" href="{{route('home.page')}}">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{isset($a)?$a:''}}" href="{{route('about')}}">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{isset($b)?$b:''}}" href="{{route('stories')}}">Stories</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{isset($c)?$c:''}}" href="{{route('gallery')}}">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{isset($d)?$d:''}}" href="{{route('notes')}}">Notes</a>
					</li>
					<li class="nav-item pr-0">
						<a class="nav-link pr-lg-0 {{isset($e)?$e:''}}" href="{{route('contact')}}">Contact</a>
					</li>
				</ul>
			</div>
		  
		</nav>
	</div>
</header>
<!--Header-->

<!-- inner page banner --> 	
<div class="innerpage-banner">
	<div class="layer1">
	</div>
</div>
<!-- //inner page banner --> 	
		
@yield('contact')
@yield('gallery')
@yield('stories')
@yield('notes')
@yield('list')
@yield('about')
@yield('detail')
@yield('search')
@yield('shareStory')
	
<!-- footer -->
<footer class="py-0">
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
				
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<section class="copyright text-center">
	<div class="container">
		<p>©VietNamLestGo.info | Design by T.ms</p>
	</div>
</section>
<!-- //copyright -->

<!-- js-scripts -->		
	<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
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