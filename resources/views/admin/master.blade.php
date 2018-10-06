<!DOCTYPE html>
<html>
<head>
	<title>Admin-Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/style-admin.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
	<script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
	<script src="{{asset('ckeditor/ckeditor.js')}}" type="text/javascript" ></script>
	<script src="{{asset('ckfinder/ckfinder.js')}}" type="text/javascript" ></script>
	<script type="text/javascript">
    var baseURL="http://localhost/Vietnam/Lestgo/public";
  </script>
  <script type="text/javascript">
  function BrowseServer( startupPath, functionData ){
      var finder = new CKFinder();
      finder.basePath = 'ckfinder/';
      finder.startupPath = startupPath;
      finder.selectActionFunction = SetFileField;
      finder.selectActionData = functionData;
      finder.selectThumbnailActionFunction = ShowThumbnails;
      finder.popup();
    }
    function SetFileField( fileUrl, data ){
      document.getElementById( data["selectActionData"] ).value = fileUrl;
    }
    function ShowThumbnails( fileUrl, data ){
      var sFileName = this.getSelectedFile().name;
      document.getElementById( 'thumbnails' ).innerHTML +=
      '<div class="thumb">' +
      '<img src="' + fileUrl + '" />' +
      '<div class="caption">' +
      '<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
      '</div>' +
      '</div>';
      document.getElementById( 'preview' ).style.display = "";
      return false;

    }
</script>
</head>
<body>
<div class="px-4 master">
	<a href="" class="text-center"><h4>VietNamLetsGo.info</h4></a>
					<hr>
		<div class="header row mt-1 mb-3 py-2 px-2">
			<div class="col-md-8">
					<ul>
						<a href="" title=""><li>Home</li></a>
						<a href="{{route('admin.stories')}}" title=""><li>Stories</li></a>
						<a href="{{route('admin.stories_user')}}" title=""><li>Stories_Users</li></a>
						<a href="{{route('admin.galleries')}}" title=""><li>Gallery</li></a>
						<a href="{{route('admin.notes')}}" title=""><li>Notes</li></a>
						<a href="{{route('admin.user')}}" title=""><li>Users</li></a>
						<a href="{{route('logoutAdmin')}}" title="" class="float-right text-warning"><li><i>Logout</i></li></a>
					</ul>
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control input-sm search border py-2" autocomplete name="" placeholder="Search...">
						<i class="icon-search fa fa-search"></i>
						<div class=" col-md-12 search-result"></div>
				
				<script>
					$(function(){
						$(".search").on('keyup',function(){
							var search=$(this).val();
							$.ajax({
								type:'get',
								dataType:'html',
								url:'<?php echo url('manager/search'); ?>',
								data:"search="+search,
								success:function(response){
									$(".search-result").html(response);
									$(".search-result").show(100);
								}
							});
						});
					});
				</script>
				<script type="text/javascript">
					$(document).mouseup(function(e) 
{
					    var container = $(".search-result");
					    if (!container.is(e.target) && container.has(e.target).length === 0) 
					    {
					        container.hide();
					    }
					});
				</script>
			</div>
		</div>
		<div class="row">
			@yield('stories')
			@yield('edit')
			@yield('add')
			@yield('galleries')
			@yield('editGallery')
			@yield('notes')
			@yield('stories_user')
			@yield('user')
			@yield('editNote')
			@yield('view')
		</div>
</div>
</body>
</html>