<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoryRequest;
use App\banner;
use App\stories;
use App\gallery;
use App\Note;
use App\stories_user;
use Hash;

class PageController extends Controller
{
    public function index()
    {
        $hots=stories::where('hot',1)->get();
        $banners=banner::all();
    	return view('home.page',compact('banners','hots'));
    }
    
    public function gallery()
    {
        $count=gallery::count();
        $nguyen=round($count/3);
        $galleries=gallery::select('id','name','img');
        $galleries3=$galleries->skip(0)->take($nguyen)->get();
        $galleries2=$galleries->skip($nguyen)->take($nguyen)->get();
        $galleries1=$galleries->skip($nguyen+$nguyen)->take($count-$nguyen-$nguyen)->get();
    	return view('home.gallery',compact('galleries1','galleries2','galleries3'));
    }
    
    public function list($alias)
    {
        $name=str_replace('-',' ',$alias);
        $galleries=gallery::select('id','name','describe','wiki')->where('name',$name)->first();
        $stories=gallery::find($galleries['id'])->stories()->get();
        return view('home.list',compact('stories','galleries'));
    }
    public function about()
    {
        return view('home.about');
    }
    public function detail($alias)
    {
        $title=str_replace('-',' ',$alias);
        $news=stories::where('title',$title)->first();
        $new_others=stories::select('title','img')->where('id_gallery',$news['id_gallery'])->where('id','!=',$news['id'])->get();
        return view('home.detail',compact('news','new_others'));
    }
    // phân trang stories
    public function stories()
    {
        $db=stories::select('*');
        $storiess=$db->latest()->paginate(8);
        $hots=$db->where('hot',1)->get();
        return view('home.stories',compact('storiess','hots'));
    }
    function next(Request $request)
    {
        $id=$request->id;
        return redirect()->away('http://localhost/Vietnam/Lestgo/public/next_update.html?page='.$id);
    }
    function nextupdate()
    {
        $db=stories::select('*');
        $storiess=$db->paginate(8);
        return view('home.nextupdate',compact('storiess'));
    }
    // phân trang stories
    function search(Request $request)
    {
        $search=$request->get('search');
        $query=stories::select('content','title')->where('content','like','%'.$search.'%');
        $query1=gallery::select('name')->where('name','like','%'.$search.'%');
        $count=$query->count();
        $count1=$query1->count();
        if($count==0&&$count1==0)
            {echo "<p class='text-center text-danger'>No result match</p>";}
        elseif ($count!=0||$count1!=0) {
            $results=$query->get();
            $result1s=$query1->get();
            return view('home.search',compact('results','result1s'));
        }
          
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function notes()
    {
        return view('home.notes');
    }
    public function postStoryUser(StoryRequest $request){
        $stories_user=new stories_user();
        $img=$request->file('img');
        $origiName=$img->getClientOriginalName();
        $path="images/";
        $stories_user->title=$request->title;
        $stories_user->content=$request->content;
        $stories_user->img=$path.$origiName;
        $stories_user->id_gallery=$request->id_gallery;
        $stories_user->id_user=$request->id_user;
        $stories_user->created_at=date('Y/m/d h:i:s');
        $img->move($path,$origiName);
        $stories_user->save();
        return redirect()->route('home.page')->with('notice',array('class'=>'alert-success','content'=>'Thanks for your story posting, Cảm ơn '.$request->name.'!'));
    }
    
}
