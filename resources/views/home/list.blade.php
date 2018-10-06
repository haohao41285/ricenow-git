@extends('home.master')
@section('list')
<!-- /stories -->
<section class="featured_services py-5">
	<div class="container box py-sm-3">
		<h3 class="heading text-center sm-5">Our Stories-<span style="color:#02b9c1">{{$galleries['name']}}</span>
				<hr class="border w-25"></h3>
				<div class="row">
				<div class="col-md-8 px-4">
					<div class=" mb-4 head-list">
					
						<p class="">{{$galleries['describe']}} <a href="{{$galleries['wiki']}}" target="_blank" title=""> Readmore</a></p>
				    </div>
					<div class="row agile_inner_info">
					@foreach($stories as $story)
					<div class="col-lg-4 col-sm-6 w3_agile_services_grid px-2">
						<div class="agile_services_grid">
							<div class="hover06 column">
								<div>
									<figure><img src="{{asset($story->img)}}" alt=" " class="img-responsive"></figure>
								</div>
							</div>
						</div>
						<h4><a href="{{route('detail',str_replace(' ','-',$story->title))}}">
							{{$story->title}}</a>
						</h4>
						<p>{{shortcut($story->content,0,99)}}</p>
					</div>
					@endforeach
				</div>
				</div>
				<div class="col-md-4 px-4">
					<h3 class="text-center">Regions</h3>
					<hr class="border">
					<div class="row gallery-info">
				<?php $lists=DB::table('galleries')->select('id','name','img')->get(); ?>
				@foreach($lists as $list)
					<div class="col-md-4 col-6 gallery-grids">
						<div class="galry-grid grid-top-rgt mb-0">
							<a href="{{route('list',str_replace(' ','-',$list->name))}}" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Travel Destinations">
								<img src="{{asset($list->img)}}" alt="" class="img-responsive zoom-img">
								<div class="w3agile-text w3agile-text-small1">
									<h5 class="name-region">{{$list->name}}</h5>
								</div>
							</a>
						</div>
					</div>
					@endforeach
			</div>
				</div>
		</div>
		
	</div>
</section>
<!-- //stories -->	
@endsection