@extends('home.master')
@section('shareStory')
<style type="text/css" media="screen">
	span{color:white;background-color: red}
</style>
<h3 class="heading text-center">Write your story about <?php $idGallery=DB::table('galleries')->select('id','name')->where('id',$id_gallery)->first(); ?>{{$idGallery->name}}</h3>
<?php 
if(isset($notice1)) echo "<p style='color:red;text-align:center'><span><i>".$notice1."</span></i></p>";
?>


<table class="table table-responsive table-hover">
	<thead>
	</thead>
	<tbody>
		<form action="{{route('postStoryUser')}}" method="post" enctype="multipart/form-data">
			<input type="hidden" value="{{$idGallery->id}}" name="id_gallery">
			<input type="hidden" value="{{$id}}" name="id_user">
			<input type="hidden" value="{{$name}}" name="name">
			{{csrf_field()}}
			<tr>
				<td>TITLE</td>
				<td><input type="text" class="form-control" name="title"  value="{{old('title')}}"><br><span>{{$errors->first('title')}}</span></td>
			</tr>
			<tr>
				<td>AVATAR OF THE STORY</td>
				<td><input type="file" name="img" required><br><span>{{$errors->first('img')}}</span></td>
			</tr>
			<tr>
				<td>CONTENT<br><span>About 1000 ~ 3000 characters.</span><br><span> If your story longer, you can devide into other part.</span></td>
				<td><textarea name="content" id="content" class="form-control" required >{{old('content')}}</textarea><span>{{$errors->first('content')}}</span>
					<script>
						CKEDITOR.replace('content');
					</script>
				</td>
			</tr>
			<tr>
				<td></td>
				<td> <input type="submit" value="Post" class="btn btn-sm nut"></td>
			</tr>
		</form>
	</tbody>
</table>
@endsection