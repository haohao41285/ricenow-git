@extends('home.master')
@section('search')
<script>
	$(function()
	{
		$(window).load(function(){
			$(".page-link").removeAttr('href');
		});
	});
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
@endsection
@section('stories')
<!-- /stories -->
<?php $b="active"; ?>
<section class="featured_services py-5">
	<div class="container py-sm-3 box">
		<h3 class="heading text-center mb-sm-5 mb-2">Hot Places
			<hr class="w-25 border"></h3>
			<div class="row agile_inner_info">
				@foreach($hots as $hot)
			<div class="col-lg-3 col-sm-6  w3_agile_services_grid px-2">
				<div class="agile_services_grid">
					<div class="hover06 column">
						<div>
							<figure><img src="{{asset($hot->img)}}" alt=" " class="img-responsive"></figure>
						</div>
					</div>
				</div>
				<h4><a href="{{route('detail',str_replace(' ','-',$hot->title))}}" title="">{{$hot->title}}</a></h4>
				<p>{!!shortcut($hot->content,0,90)!!}</p>
			</div>
			@endforeach
		</div>
		<h3 class="heading text-center mb-sm-5 mb-2">Our Stories
			<hr class="border w-25"></h3>
		<div class="row agile_inner_info" id="content_stories">
			@foreach($storiess as $stories)
			<div class="col-lg-3 col-sm-6  w3_agile_services_grid px-2">
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
		</div>
		
	</div>
</section>
<!-- //stories -->	
@endsection