@extends('admin.master')
@section('add')
<table class="table table-hover table-bordered  tabel-responsive">
	<caption>Add Story</caption>

	<tbody>
		<form action="{{route('admin.postAdd')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
		<tr>
			<td>Title</td>
			<td><input class="form-control" type="text" name="title" value="{{old('title')}}"></td>
		</tr>
		<tr>
			<td>Content</td>
			<td><textarea name="content" class="form-control" value="{{old('content')}}" rows="5"></textarea>
				<script>
					CKEDITOR.replace('content')
				</script>
			</td>
		</tr>
		<tr>
			<td>Image</td>
			<td>
				<input type="file" value="{{old('img')}}" class="btn btn-primary btn-sm" name="img">
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
				<input type="radio"  name="trend"  value="1">Yes<br>
		</tr>
		<tr>
			<td>Hot</td>
			<td>
				<input type="radio" name="hot"  value="1">Yes<br>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-sm btn-primary" value="Add"></td>
		</tr>
	</form>
	</tbody>
</table>
@endsection