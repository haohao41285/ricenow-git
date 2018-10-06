<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\stories;
use App\gallery;
use App\Note;
use App\stories_user;
use App\User;
use App\Admin;
use Hash;
use Auth;
//use Mail;

class AdminController extends Controller
{
    // admin
     public function __construct(){
        $this->middleware('guest:admin',['except'=>['logout']]);
    }
    public function postRegister(Request $request){

        $admin=new Admin();
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->phone=$request->phone;
        $admin->password=Hash::make($request->name);
        $admin->remember_token=$request->token;
        $admin->save();
        return back();
    }
    public function postLogin(Request $request)
    {
        $login=array('email'=>$request->email,'password'=>$request->password,'phone'=>$request->phone);
        if(Auth::guard('admin')->attempt($login))
        {
           return view('admin.master');
        }
        else return back();

    }
     public function logout()
        {
            Auth::guard('admin')->logout();
            return redirect()->route('home.page');
        }
	// stories
    public function stories(){
    	$stories=stories::latest()->paginate(10);
    	$count=stories::count();
    	return view('admin.stories',compact('stories','count'));
    }
    public function delete(Request $request,$id)
    {
    	stories::FindorFail($id)->delete();
    }
    public function edit($id)
    {
    	$stories=stories::find($id);
    	return view('admin.edit',compact('stories'));
    }
    public function postEdit(Request $request,$id)
    {
    	$stories=stories::find($id);
        $img=$request->file('img');
        if($img==null){$stories->img=$request->img1;}
        else{
            $original_name=$img->getClientOriginalName();
            $path="images/";
            $img->move($path,$original_name);
            $stories->img=$path.$original_name;
        }
    	$stories->title=$request->title;
    	$stories->content=$request->content;
    	$stories->id_gallery=$request->id_gallery;
    	$stories->trend=$request->trend;
    	$stories->hot=$request->hot;
    	$stories->created_at=date('Y/m/d h:i:s');
    	$stories->save();
    	return redirect()->route('admin.stories');
    }
    public function add()
    {
    	return view('admin.add');
    }
    public function postAdd(Request $request)
    {
    	$stories=new stories();
        $img=$request->file('img');
        $original_name=$img->getClientOriginalName();
        $path="images/";
        $img->move($path,$original_name);
        $stories->img=$path.$original_name;
    	$stories->title=$request->title;
    	$stories->content=$request->content;
    	$stories->id_gallery=$request->id_gallery;
    	$stories->trend=isset($request->trend)?$request->trend:0;
    	$stories->hot=isset($request->hot)?$request->hot:0;
    	$stories->created_at=date('Y/m/d h:i:s');
    	$stories->save();
    	return redirect()->route('admin.stories');
    }
    // --stories
    public function galleries(){
    	$galleries=gallery::orderBy('name','asc')->get();
    	$count=gallery::count();
    	return view('admin.galleries',compact('galleries','count'));
    }
    public function addGallery(Request $request){
    	$galleries=new gallery();
        $img=$request->file('img');
        $original_name=$img->getClientOriginalName();
        $path="images/";
        $img->move($path,$original_name);
        $galleries->img=$path.$original_name;
    	$galleries->name=$request->name;
    	$galleries->describe=$request->describe;
    	$galleries->wiki=$request->wiki;
    	$galleries->save();
    	return back();
    }
    public function editGallery($id)
    {
    	$galleries=gallery::find($id);
    	// dd($galleries);
    	return view('admin.editGallery',compact('galleries'));
    }
    public function postEditGallery(Request $request,$id){
    	$galleries=gallery::find($id);
        $img=$request->file('img');
        if($img==null){$stories->img=$request->img1;}
        else{
            $original_name=$img->getClientOriginalName();
            $path="images/";
            $img->move($path,$original_name);
            $galleries->img=$path.$original_name;
        }
    	$galleries->name=$request->name;
    	$galleries->describe=$request->describe;
    	$galleries->wiki=$request->wiki;
    	$galleries->save();
    	return redirect()->route('admin.galleries');
    }
    public function gallery($id){
    	$db=gallery::find($id)->stories();
    	$stories=$db->latest()->paginate(10);
    	$count=$db->count();
    	return view('admin.stories',compact('stories','count'));
    }
    public function deleteGallery(Request $request){
    	$count=gallery::find($request->id)->stories()->count();
    	if($count==0){
    	gallery::FindorFail($request->id)->delete();

    	}
    	else {return false;}
    }
    //notes
    public function notes(){
    	$notes=Note::latest()->get();
    	$count=Note::count();
    	return view('admin.notes',compact('notes','count'));
    }
    public function addNote(Request $request){
        $notes=new Note();
        $notes->title=$request->title;
        $notes->content=$request->content;
        $notes->created_at=date('Y/m/d h:i:s');
        $notes->save();
        return back();
    }
    public function deleteNote($id){
        Note::find($id)->delete();
    }
    public function editNote($id)
    {
        $notes=Note::find($id);
        return view('admin.editNote',compact('notes'));
    }
    public function postEditNote(Request $request,$id){
        $notes=Note::find($id);
        $notes->title=$request->title;
        $notes->content=$request->content;
        $notes->created_at=date('Y/m/d h:i:s');
        $notes->save();
        return redirect()->route('admin.notes');
    }
    public function search(Request $request)
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
            //thay lại link result
            return view('home.search',compact('results','result1s'));
        }
          
    }
    // user
     public function stories_user(){
	   	$stories=stories_user::latest()->paginate(10);
	   	$count=stories_user::count();
	   	return view('admin.stories_user',compact('stories','count'));
    }
    public function view($id){
        $stories_user=stories_user::find($id);
        return view('admin.view',compact('stories_user'));
    }
    public function post(Request $request,$id){
        stories_user::where('id',$id)->update(['post'=>1]);
        // Mail::send('admin.sendMail',array('name'=>$request->name,'content'=>$content),function($message){
        //     $message->to('nguyenthieupro93@gmail.com','Visitor')->subject('Responsive forr your post');
        // });
    }
    public function user(){
    	$users=User::latest()->paginate(20);
    	$count=User::count();
    	return view('admin.user',compact('users','count'));
    }
}
