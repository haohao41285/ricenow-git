@extends('admin.master')
@section('stories')
<div class="stories">
<h4 class="text-center">Bảng Stories</h4>
<p class="text-center">Có tất cả: <span>{{$count}}</span> stories</p>
<table class="table table-hover table-bordered table-striped table-dark table-responsive">
	<caption>Bảng Stories</caption>
	<thead>
		<tr>
			<th>Stt</th>
			<th>Id</th>
			<th>Title</th>
			<th>Content</th>
			<th>Functions</th>
			<th>Img</th>
			<th>Gallery</th>
			<th>Date</th>
		</tr>
	</thead>
	<tbody>
		<?php $stt=1; ?>
		@foreach($stories as $story)
		<tr class="story{{$story->id}}"  scope="row">
			<td scope="col">{{$stt}}</td>
			<td scope="col">{{$story->id}}</td>
			<td scope="col">{{$story->title}} {!!($story->hot==1)?"<span style='color:red;font-weight: bold'>Hot</span>":""!!} {!!($story->trend==1)?"<span style='color:red;font-weight: bold'>Trend</span>":""!!}</td>
			<td scope="col">{{shortcut($story->content,0,80)}}</td>
			<td scope="col">
				<a href="{{route('add')}}" title="Add"><i class="fa fa-plus" aira-hidden="true"></i></a>&nbsp
				<a  title="Delete" class="delete{{$story->id}}" ><i class="fa fa-trash-o" aira-hidden="true"></i></a>&nbsp
				<a href="{{route('admin.edit',$story->id)}}" title="Fix"><i class="fa fa-pencil" aira-hidden="true"></i></a>
				<script>
					$(function(){
						$(".delete{{$story->id}}").on('click',function(){
							var id={{$story->id}};
							if(confirm('Xóa mục này?')==true)
							{
									$.ajax({
									type:'get',
									dataType:'html',
									url:'<?php echo url('manager/delete'); ?>/'+id,
									data:'id='+id,
									success:function(response){
										console.log(response);
										$(".story{{$story->id}}").hide(0);
										alert('Đã xóa một mục!');
									}
								});
							}
							else {
								return false;
							}
							
						});
					});
				</script>
			</td>
			<td><img class="img-responsive" src="{{asset($story->img)}}"></td>
			<td><a href="{{route('admin.gallery',$story->id_gallery)}}" title=""><?php echo(DB::table('galleries')->find($story->id_gallery)->name);?></a></td>
			<td>{{$story->created_at}}</td>
		</tr>
		<?php  $stt++; ?>
		@endforeach
	</tbody>
</table>
{{$stories->links()}}
</div>
@endsection