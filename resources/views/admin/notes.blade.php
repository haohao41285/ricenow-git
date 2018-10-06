@extends('admin.master')
@section('notes')
<div class="addNote col-md-12" id="add">
	<h4 class="text-center">Add Note</h4>
	<table class="table table-hover table-bordered  table-responsive">
		<caption>Add Note</caption>
		<tbody>
			<form action="{{route('admin.addNote')}}" method="post">
				{{csrf_field()}}
				<tr>
					<td>Tittle</td>
					<td><input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder=""></td>
				</tr>
				<tr>
					<td>Content</td>
					<td><textarea name="content" class="form-control">{{old('content')}}</textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Add" class="btn btn-primary btn-sm"></td>
				</tr>
			</form>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$(function(){
		$(".add").on('click',function(){
			$(".addNote").slideToggle(1000);
		});
	});
</script>
<div class="stories">
<h4 class="text-center">Bảng Notes</h4>
<p class="text-center">Có tất cả: <span>{{$count}}</span> Notes</p>
<table class="table table-hover table-bordered  table-dark table-responsive">
	<caption>Bảng Notes</caption>
	<thead>
		<tr>
			<th>Stt</th>
			<th>Id</th>
			<th>Title</th>
			<th>Content</th>
			<th>Date</th>
			<th>Functions</th>
		</tr>
	</thead>
	<tbody>
		<?php $stt=1; ?>
		@foreach($notes as $note)
		<tr class="note{{$note->id}}"  scope="row">
			<td scope="col">{{$stt}}</td>
			<td scope="col">{{$note->id}}</td>
			<td scope="col">{{$note->title}}</td>
			<td scope="col">{{shortcut($note->content,0,80)}}</td>
			<td scope="col">{{$note->created_at}}</td>
			<td scope="col">
				<a href="#add" class="add" title="Add"><i class="fa fa-plus" aira-hidden="true"></i></a>&nbsp
				<a class="delete{{$note->id}}" title="Delete"><i class="fa fa-trash-o" aira-hidden="true"></i></a>&nbsp
				<a href="{{route('editNote',$note->id)}}" title="Fix"><i class="fa fa-pencil" aira-hidden="true"></i></a>
				<script>
					$(function(){
						$(".delete{{$note->id}}").on('click',function(){
							var id={{$note->id}};
							if(confirm('Xóa mục này')==true){
									$.ajax({
									type:'get',
									dataType:'html',
									url:'<?php echo url('manager/deleteNote'); ?>/'+id,
									data:"id="+id,
									success:function(response){
										//console.log(response);
										$(".note{{$note->id}}").hide(100);
										alert('Đã xóa');
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
			
		</tr>
		<?php  $stt++; ?>
		@endforeach
	</tbody>
</table>
</div>
@endsection