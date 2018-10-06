@extends('home.master')
@section('gallery')
<div class="gallery py-5">
	<div class="container box py-sm-3">
		<h3 class="heading text-center mb-md-2">Our Gallery</h3>
		<p class="text-center font-italic" style="color:red">Anywhere has interesting things. Let's go!</p>
		<hr class="border w-25">
		<div class="row gallery-info">
			<div class="col-md-4 gallery-grids">
				@foreach($galleries1 as $gallery1)
				<div class="galry-grid grid-top-rgt px-1 py-1">
					<a href="{{route('list',str_replace(' ','-',$gallery1->name))}}" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Travel Destinations">
						<img src="{{$gallery1->img}}" alt="" class="img-responsive zoom-img">
						<div class="w3agile-text w3agile-text-small1">
							<h5>{{$gallery1->name}}</h5>
						</div>
					</a>
				</div>
				@endforeach
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-4 gallery-grids">
				@foreach($galleries3 as $gallery3)
				<div class="galry-grid grid-top-rgt px-1 py-1">
					<a href="{{route('list',str_replace(' ','-',$gallery3->name))}}" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Travel Destinations">
						<img src="{{$gallery3->img}}" alt="" class="img-responsive zoom-img">
						<div class="w3agile-text w3agile-text-small1">
							<h5>{{$gallery3->name}}</h5>
						</div>
					</a>
				</div>
				@endforeach
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-4  gallery-grids">
				
			    @foreach($galleries2 as $gallery2)
				<div class="galry-grid grid-top-rgt px-1 py-1">
					<a href="{{route('list',str_replace(' ','-',$gallery2->name))}}" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Travel Destinations">
						<img src="{{$gallery2->img}}" alt="" class="img-responsive zoom-img">
						<div class="w3agile-text w3agile-text-small1">
							<h5>{{$gallery2->name}}</h5>
						</div>
					</a>
				</div>
				@endforeach
				<div class="clearfix"> </div>
		</div> 
	</div> 
</div>
</div>
@endsection