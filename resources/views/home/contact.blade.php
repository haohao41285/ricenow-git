@extends('home.master')
@section('contact')
<!-- contact -->
<?php $e="active"; ?>
<section class="w3ls-section contact py-5">
	<div class="container box">
		<div class="row contact_wthreerow agileits-w3layouts py-sm-3 px-3">
		
			<div class="col-lg-5 col-md-6 pr-2 agileits_w3layouts_contact_gridl">
				<div class="agileits_mail_grid_right_grid">
					<h4>Contact Address</h4>
					<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur. Nunc id dui vitae urna tincidunt varius.</p>
					<ul class="contact_info">
						<li><span class="fa fa-map-marker" aria-hidden="true"></span>Australian Travel Agency, Ravish NSW,<span class="left"> Australia</span>.</li>
						<li><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
						<li><span class="fa fa-phone" aria-hidden="true"></span>+1(21) 244 567 5678</li>
						<li><span class="fa fa-globe" aria-hidden="true"></span><a href="#">info@website.com</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-7 col-md-6 pl-2 ">
				<h4>Contact Form</h4>
				<form action="#" role="form-group" method="post">
					<input type="text" class="form-control" name="name" placeholder="Your Name"><br>
					<input type="text" class="form-control" name="country" placeholder="Your Country"><br>
					<input type="email" class="form-control" name="email" placeholder="Your Email"><br>
					<textarea name="message" placeholder="Your Mesage" class="form-control"></textarea></form><br>
					<input type="submit" class="btn btn-sm nut" value="SEND">
				</form>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->
@endsection