@extends('admin.master')
@section('edit')
<table class="table table-hover table-bordered  tabel-responsive">
	<caption>Edit Story</caption>

	<tbody>
		<form action="{{route('admin.postEdit',$stories['id'])}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
		<tr>
			<td>Title</td>
			<td><input class="form-control" type="text" name="title" value="{{$stories['title']}}"></td>
		</tr>
		<tr>
			<td>Content</td>
			<td><textarea name="content" class="form-control" rows="5">{{$stories['content']}}</textarea>
				<script>
					CKEDITOR.replace('content')
				</script>
			</td>
		</tr>
		<tr>
			<td>Image</td>
			<td>
				<img class="img-admin img-responsive" src="{{asset($stories['img'])}}">
				<input type="file" value="" class="btn btn-primary btn-sm" name="img">
				<input type="hidden" name="img1" value="{{$stories['img']}}">
			</td>
		</tr>
		<tr>
			<td>Gallery</td>
			<td><select class="form-control w-25" name="id_gallery">
				<?php $galleries=DB::table('galleries')->select('name','id')->get(); ?>
				@foreach($galleries as $gallery)
				<option value="{{$gallery->id}}">{{$gallery->name}}</option>
				@endforeach
			</select></td>
		</tr>
		<tr>
			<td>Trend</td>
			<td>
				<?php ($stories['trend']==1)?$a="checked":$a=""; ?>
				<input type="radio"  name="trend" {{$a}} value="1">Yes<br>
		</tr>
		<tr>
			<td>Hot</td>
			<td>
				<?php ($stories['hot']==1)?$b="checked":$b=""; ?>
				<input type="radio" name="hot" {{$b}} value="1">Yes<br>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-sm btn-primary" value="Update"></td>
		</tr>
	</form>
	</tbody>
</table>
@endsection