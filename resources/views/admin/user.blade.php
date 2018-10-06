@extends('admin.master')
@section('user')
<div class="stories">
<h4 class="text-center">Bảng  người dùng</h4>
<p class="text-center">Có tất cả: <span>{{$count}}</span> user</p>
<table class="table table-hover table-bordered table-striped table-dark table-responsive">
	<caption>Bảng Người dùng</caption>
	<thead>
		<tr>
			<th>Stt</th>
			<th>Id</th>
			<th>name</th>
			<th>Email</th>
			<th>Remember_token</th>
			<th>Created_at</th>
			<th>Updated_at</th>
		</tr>
	</thead>
	<tbody>
		<?php $stt=1; ?>
		@foreach($users as $user)
		<tr   scope="row">
			<td scope="col">{{$stt}}</td>
			<td scope="col">{{$user->id}}</td>
			<td scope="col">{{$user->name}}</td>
			<td scope="col">{{$user->email}}</td>
			<td scope="col">{{$user->remember_token}}</td>
			<td scope="col">{{$user->created_at}}</td>
			<td scope="col">{{$user->updated_at}}</td>
		</tr>
		<?php  $stt++; ?>
		@endforeach
	</tbody>
</table>
{{$users->links()}}
</div>
@endsection