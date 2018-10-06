<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stories;

class SearchController extends Controller
{
    public function str($id)
    {
    	$str=stories::FindOrFail($id);
    	$data='Title:'.$str->title."<br>Content:".$str->content;
    	return $data;
    }
    public function searchBytitle(Request $request)
    {
    	$str=stories::where('title','like','%'.$request->title.'%')->get();
    	return response()->json($str);
    }
    public function searchBycontent(Request $request)
    {
    	$str=stories::wwhere('content','like','%'.$request->content.'%')->get();
    	return response()->json($str);
    }
}
