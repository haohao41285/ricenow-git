@extends('admin.master')
@section('galleries')
<div class="addGallery col-md-12" id="addGallery">
<h4 class="text-center">Add Regions</h4>
	<table class="table table-hover table-bordered  table-responsive">
		<caption>Add Region</caption>
		<tbody>
			<form action="{{route('admin.addGallery')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				<tr>
					<td>Name</td>
					<td><input type="text" class="form-control" name="name" value="{{old('name')}}"></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><textarea name="describe" class="form-control" value="{{old('describe')}}" rows="5"></textarea></td>
				</tr>
				<tr>
					<td>Avatar</td>
					<td><input type="file" class="btn btn-primary btn-sm" name="img" value="{{old('img')}}"></td>
				</tr>
				<tr>
					<td>Wiki</td>
					<td><input type="text" class="form-control" name="wiki" value="{{old('wiki')}}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" class="btn btn-primary btn-sm" value="Add"></td>
				</tr>
			</form>
		</tbody>
	</table>
</div>
<script>
	$(function(){
		$(".addButton").on('click',function(){
			$(".addGallery").slideToggle(1000);
		});
	});
</script>
<div class="stories">
<h4 class="text-center">Bảng Regions</h4>
<p class="text-center">Có tất cả: <span>{{$count}}</span> regions</p>
<table class="table table-hover table-bordered  table-dark table-responsive">
	<caption>Bảng Regions</caption>
	<thead>
		<tr>
			<th>Stt</th>
			<th>Id</th>
			<th>Name</th>
			<th>Description</th>
			<th>Img</th>
			<th>Wiki</th>
			<th>Functions</th>
		</tr>
	</thead>
	<tbody>
		<?php $stt=1; ?>
		@foreach($galleries as $gallery)
		<tr class="gallery{{$gallery->id}}" scope="row">
			<td scope="col">{{$stt}}</td>
			<td scope="col">{{$gallery->id}}</td>
			<td scope="col"><a href="{{route('admin.gallery',$gallery->id)}}" title="">{{$gallery->name}}</a></td>
			<td scope="col">{{shortcut($gallery->describe,0,80)}}</td>
			<td><img class="img-responsive" src="{{asset($gallery->img)}}"></td>
			<td scope="col">{{$gallery->wiki}}</td>
			<td scope="col">
				<a href="#addGallery" class="addButton" title="Add"><i class="fa fa-plus" aira-hidden="true"></i></a>&nbsp
				<a  class="delete{{$gallery->id}}" title="Delete"><i class="fa fa-trash-o" aira-hidden="true"></i></a>&nbsp
				<a href="{{route('admin.editGallery',$gallery->id)}}" title="Fix"><i class="fa fa-pencil" aira-hidden="true"></i></a>
				<script>
					$(function(){
						$(".delete{{$gallery->id}}").on('click',function(){
							var id={{$gallery->id}};
							
							if(confirm('Xóa mục này?')==true){
								$.ajax({
									type:'get',
									dataType:'html',
									url:'<?php echo url('manager/delete_gallery/'); ?>',
									data:"id="+id,
									success:function(response){
										console.log(response);
										$(".gallery{{$gallery->id}}").hide();
										alert('Đã xóa một mục');
									},
									error:function(response){
										alert('Chứa stories con.Không thể xóa mục này');
									}
								});
							}
							else{
								return false;
							}
						});
					});
				</script>
			</td>
			
		</tr>
		<?php  $stt++; ?>
		@endforeach
	</tbody>
</table>
</div>
@endsection