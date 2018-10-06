<ul>
	@foreach($results as $result)
	<a href="{{route('detail',str_replace(' ','-',$result->title))}}" title=""><li>{{$result->title}}</li></a>
	@endforeach
</ul>
<ul>
	@foreach($result1s as $result1)
	<a href="{{route('list',str_replace(' ','-',$result1->name))}}" title=""><li>{{$result1->name}}</li></a>
	@endforeach
</ul>