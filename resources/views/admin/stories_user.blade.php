@extends('admin.master')
@section('stories_user')
<div class="stories">
<h4 class="text-center">Bảng Stories người dùng</h4>
<p class="text-center">Có tất cả: <span>{{$count}}</span> stories</p>
<table class="table table-hover table-bordered table-striped table-dark table-responsive">
	<caption>Bảng Stories</caption>
	<thead>
		<tr>
			<th>Stt</th>
			<th>Id</th>
			<th>Title</th>
			<th>Content</th>
			<th>Post</th>
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
			<td scope="col">{{$story->title}}</td>
			<td scope="col">{{shortcut($story->content,0,80)}}</td>
			<td scope="col">
				<a href="{{route('admin.view',$story->id)}}" title="">View</a><br>

				<p style="color: red"><?php  if($story->post==1)echo "Posted";else " "; ?></p>
			</td>
			<td><img class="img-responsive" src="{{asset($story->img)}}"></td>
			<td><a href="{{route('admin.gallery',$story->id_gallery)}}" title=""><?php echo(DB::table('galleries')->find($story->id_gallery)->name); ?></a></td>
			<td>{{$story->created_at}}</td>
		</tr>
		<?php  $stt++; ?>
		@endforeach
	</tbody>
</table>
{{$stories->links()}}
</div>
@endsection