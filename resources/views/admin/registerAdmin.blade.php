@extends('admin.master-admin')
@section('register')
<div class="col-md-4 offset-md-4">
	<h4 class="text-center text-white">INFORMATION REGISTER</h4>
	<form action="{{route('registerAdmin')}}" method="post" accept-charset="utf-8">
		<input type="hidden" value="{{csrf_token()}}" name="token">
		{{csrf_field()}}
		<input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name" required><br>
		<input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email" required><br>
		<input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="Phone" required><br>
		<input type="password" class="form-control"  name="password" value="" placeholder="Password" required><br>
		<input type="submit" class="btn btn-sm btn-primary"  value="Register">
	</form>
</div>
@endsection