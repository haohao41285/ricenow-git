@extends('admin.master')
@section('view')
<div class="container">
	<div class="border  mb-3">
		<h4>{{$stories_user->title}}</h4>
		<img class="img-responsive img" style="max-height: 500px;max-width:
		500px;" src="{{asset($stories_user->img)}}"" alt="">
		<p><b><?php echo(DB::table('galleries')->find($stories_user->id_gallery)->name); ?></b></p>
		<p>{!!$stories_user->content!!}</p>
	<div>
	<?php $info_user=DB::table('users')->find($stories_user->id_user); ?>

	<div class="border text-center w-50 mx-auto">
		<h4>User's Information</h4>
		<hr>
		<p>Name: <b>{{$info_user->name}}</b></p>
		<p>Email: <b>{{$info_user->email}}</b></p>
		<p>Country: <b>{{$info_user->country}}</b></p>
    </div>
	<button class="btn btn-primary " id="post">Post</button><span class="posted"></span>
</div>
<script>
	$(function(){
		$("#post").on('click',function(){
			var id={{$stories_user->id}};
			$.ajax({
				type:'get',
				dataType:'html',
				url:'<?php echo url('manager/post'); ?>/'+id,
				data:"id="+id+"&name="+name,
				success:function(response){
					console.log(response);
					$(".posted").text("Đã Đăng");
				}
			});
		});
	});
</script>
@endsection