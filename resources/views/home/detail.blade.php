@extends('home.master')
@section('js')
<script src="{{asset('js/add.js')}}" type="text/javascript"></script>
@endsection
@section('detail')
<style type="text/css" media="screen">
	.detail-left>h5{
		text-align: center;
		border-bottom: 1px #c7cbcf dotted;
		padding-bottom: 5px;
		margin-bottom: 10px;
	}
</style>
<input class="token" type="hidden" name="_token" value="{{csrf_token()}}" >
<input type="hidden" class="id_gallery" name="id_gallery" value="{{$news->id_gallery}}">
<div class=" container box my-5">
	<div class="row">
		
		<div class="col-md-6 offset-md-1 detail-left">
			
			<h3>{{$news->title}}</h3>
			<img class="py-2 img img-responsive" src="{{asset($news->img)}}"><br><br>
			{!!$news->content!!}
			
			<div class="clearfix end"></div>
			<div class="share px-2">
				<h4  class="border px-3 font-italic box shareYou" onclick="register()">Share your interesting experiences about this place at here</h4>
				<div class="shareStory py-5"></div>
			</div>
			
		</div>
		
		<div class="col-md-3 offset-md-1  detail-right" >
			<h3 class="text-center">The Same Region</h3>
			<hr class="border">
			<div class="scroll-region mb-3">
				@foreach($new_others as $new_other)
					<div class="row detail-right-mini py-2 px-2">
						<div class="col-md-4 col-4">
							<img src="{{asset($new_other->img)}}" alt="">
						</div>
						<div class="col-md-8 col-8">
							<a href="{{route('detail',str_replace(' ','-',$new_other->title))}}" title="">
								<p class="pl-1"><?php shortcut($new_other->title,0,50); ?></p>
							</a>
						</div>
					</div>
				@endforeach
			</div>
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
@endsection