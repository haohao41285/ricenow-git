@extends('home.master')
@section('about')
<?php $a="active"; ?>
<section class="welcome py-5">
	<div class="container box py-md-3">
	<h3 class="heading text-center mb-md-2"> About Us </h3>
	<hr class="w-25 border">
		<div class="row welcome-grids">
			<div class="col-lg-6 mt-lg-0 mt-5 welcome-grid3">
				<div class="position">
					<img id="vietnam-map" src="images/vietnam-map.jpg" alt="" data-zoom-image="images/vietnam-map.jpg"  />
					<div class="caption">
						<p class="text-center">Map's Source: Onestopmap</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 px-3">
				<div class="row agileits_team_grids">
				<div class="col-lg-4 col-sm-12 agileits_team_grid">
					<center><!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="agileits_team_grid_figure">
						<img src="{{asset('images/b1.jpg')}}" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"></div>
					
					</center>
				</div>
				<div class="col-lg-8">
					<h4> Charlotte <span>guide</span></h4>
					<p>Morbi non elit sed neque init rhoncus maximus ac enim.</p>
				</div>
			</div>
					<h4 class="mb-3">welcome to the travel world</h4>
					<h3>Remember that happiness is a way of travel, not a destination.</h3>
					<p class="my-4">Aliquam consequat rhoncus ipsum et hendrerit. Proin sed nibhila rin iaculis, aliquet nunc nec, ornare nulla. Duis maximus faucibus ipsum consectetur. Donec elementum hendrerit arcu id rhoncus initis. lot Suspendisse ut elementum nunc. Aenean aliquam porta sem ins tincidunt congue. Phasellus dictum viverra sem id vehicula. Fus cenec elementum sapien.</p>
			</div>
			
		</div>
	</div>
</section>
<!-- //welcome -->

<!-- welcome bottom -->
<section class="welcome-bottom">
	<div class="welcome-bottom-layer py-5">
		<div class="container py-lg-5 py-sm-3">
			<h4 class="mb-2">Travel doesn't become adventure until you leave yourself behind </h4>
			<p class="mb-4">Let explore VietNam, rightnow !</p>
		</div>
	</div>
</section>
@endsection