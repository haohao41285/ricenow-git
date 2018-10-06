<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\EmailRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Hash;
use App\User;
use App\email_sub;


class UserController extends Controller
{
    use AuthenticatesUsers;
    function loginUser(loginRequest $request){
    	$login=array('email'=>$request->email,'password'=>$request->password);
    	if(Auth::attempt($login))
    	{
    		$id=Auth::id();
    		$name=Auth::user()->name;
    		$id_gallery=$request->id_gallery;
    		return view('home.shareStory',compact('id','name','id_gallery'));
    	}
    	else{
    		return back()->with('notice',array('class'=>'alert-warning','content'=>'<span style="color:red">Incorrect Information. Check again, please!</span>'));
    	}
    }
    public function register(RegisterRequest $request)
    {
        $count=User::where('email',$request->email)->count();
        if($count<1)
        {
            //session('name',$request->name);
            $user=new User();
            $user->name=$request->name;
            $user->country=$request->country;
            $user->password=Hash::make($request->password);
            $user->email=$request->email;
            $user->remember_token=$request->_token;
            $user->save();
            $id_gallery=$request->id_gallery;
            $name=$request->name;
            $id=$user->id;
            $notice1='If you refresh this page, Data will LOST and maybe will LOGIN AGAIN. Be careful!';
            return view('home.shareStory',compact('id_gallery','name','id','notice1'));
        }
        else{
            return back()->with('notice',array('class'=>'alert-warning','content'=>'Sorry.Email<span class="text-danger">'.$request->email.'</span> had used'));
        }
    }
    public function email_sub(EmailRequest $request){
        $request->email;
        if(email_sub::where('email',$request->email)->count()<1)
        {
            $email_sub=new email_sub();
            $email_sub->email=$request->email;
            $email_sub->created_at=date('Y/m/d h:s:i');
            $email_sub->save();
        }
        else return false;
        
    }
}
