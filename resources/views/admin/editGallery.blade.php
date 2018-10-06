@extends('admin.master')
@section('editGallery')
<div class=" col-md-12">
<h4 class="text-center">Edit Regions</h4>
	<table class="table table-hover table-bordered  tabel-responsive">
		<caption>Edit Region</caption>
		<tbody>

			<form action="{{route('admin.postEditGallery',$galleries['id'])}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				<tr>
					<td>Name</td>
					<td><input type="text" class="form-control" name="name" value="{{$galleries['name']}}"></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><textarea name="describe" id="describe" class="form-control" rows="5">{{$galleries['describe']}}</textarea>
					</td>
				</tr>
				<tr>
					<td>Avatar</td>
					<td>
						<img src="{{asset($galleries['img'])}}" class="img-gallery img-ressponsive" alt=""><br><br>
						<input type="file" class="btn btn-primary btn-sm" name="img" value="">
						<input type="hidden" name="img1" value="{{$galleries['img']}}">
					</td>
				</tr>
				<tr>
					<td>Wiki</td>
					<td><input type="text" class="form-control" name="wiki" value="{{$galleries['wiki']}}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" class="btn btn-primary btn-sm" value="Edit"></td>
				</tr>
			</form>
		</tbody>
	</table>
</div>
@endsection