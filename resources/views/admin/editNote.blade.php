@extends('admin.master')
@section('editNote')
<div class="col-md-12">
	<table class="table table-responsive table-hover table-bordered">
		<caption>Edit Note</caption>
		<tbody>
			<form action="{{route('admin.postEditNote',$notes['id'])}}" method="post">
				{{csrf_field()}}
				<tr>
					<td>Title</td>
					<td><input type="text" class="form-control form-sm" name="title" value="{{$notes['title']}}"></td>
				</tr>
				<tr>
					<td>Content</td>
					<td><textarea name="content" class="form-control">{{$notes['content']}}</textarea>
						<script>
							CKEDITOR.replace('content');
						</script>
					</td>
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