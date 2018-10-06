function register(){
	   var token=$(".token").val();
	   var id_gallery=$(".id_gallery").val();
	    var url="http://localhost/Vietnam/Lestgo/public/registerUser.html";
		$(".shareStory").append("<div id='login' style='width:100%;position:inline;z-index:1001;display:none' class='registerForm border px-2 py-2'><h4 class='text-center'>Register<span class='fa fa-times float-right' onclick='moveRegister()' aria-hidden='true'></span></h4><form action='"+url+"' method='get'><input type='hidden' name='_token' value='"+token+"'><input type='hidden' name='id_gallery' value='"+id_gallery+"'><input type='text' class='form-control' name='name' placeholder='Your Name' required><br><input type='text' class='form-control' name='country' placeholder='Your Country' required><br><input type='email' class='form-control' name='email' placeholder='Your Email' required><br><input type='password' class='form-control' name='password' placeholder='Your Password' required><span style='color:red'>(*At least 6 characters)</span><br><input type='submit' class='btn btn-sm nut'  value='Register'></form><p onclick='login()' class='text-center text-primary ihad'><i>I had a account</i></p></div>");
		$(".registerForm").slideDown(500);
		$(".shareYou").slideUp();
	};
function moveRegister(){
		$(".shareStory").text("");
		$(".shareYou").slideDown();
	};
function login(){
		var token=$(".token").val();
	    var id_gallery=$(".id_gallery").val();
		var url1="http://localhost/Vietnam/Lestgo/public/loginUser.html";
		$(".shareStory").text("");
		$(".shareStory").append("<div  style='width:100%;position:inline;z-index:1001;display:none' class='loginForm border px-2 pb-5'><h4 class='text-center'>Login<span class='fa fa-times float-right' onclick='moveRegister()' aria-hidden='true'></span></h4><form action='"+url1+"' method='get'><input type='hidden' name='_token' value='"+token+"'><input type='hidden' name='id_gallery' value='"+id_gallery+"'><input type='email' class='form-control' name='email' placeholder='Your Email' required><br><input type='password' class='form-control' name='password' placeholder='Your Password' required><br><input type='submit' class='btn btn-sm nut'  value='Login' ></form></div>");
		$(".loginForm").slideDown(500);
	};