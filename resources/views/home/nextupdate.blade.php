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

	<!-- //web-fonts -->
	
</head>

<body>
<!-- //inner page banner --> 	
<!-- nextupdate -->
@foreach($storiess as $stories)
			<div class="col-lg-3 col-sm-6  w3_agile_services_grid px-2 load">
				<div class="agile_services_grid">
					<div class="hover06 column">
						<div>
							<figure><img src="{{$stories->img}}" alt=" " class="img-responsive"></figure>
						</div>
					</div>
				</div>
				<h4><a href="{{route('detail',str_replace(' ','-',$stories->title))}}" title="">{{$stories->title}}</a></h4>
				<p>{!!shortcut($stories->content,0,90)!!}</p>
			</div>
			@endforeach
			<div class="container mt-3">{{$storiess->links()}}</div>
			
<script>
	$(function()
	{
		$(".page-link").on("click",function(){
			$(this).removeAttr('href');
			var t=$(this).text();
			$.ajax({
				type:'get',
				dataType:'html',
				url:'<?php echo url('next'); ?>',
				data:"id="+t,
				success:function(response){
					//console.log(response);
					$("#content_stories").html(response);
					$(".page-link").removeAttr('href');
				}
			});
		});
	});
</script>
<!-- //nextupdate -->
<!-- footer -->
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