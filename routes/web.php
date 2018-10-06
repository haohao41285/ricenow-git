<?php
Route::get('home-page.html','PageController@index')->name('home.page');
Route::get('stories.html','PageController@stories')->name('stories');
Route::get('gallery.html','PageController@gallery')->name('gallery');
Route::get('contact.html','PageController@contact')->name('contact');
Route::get('notes.html','PageController@notes')->name('notes');
Route::get('list/{alias}.html','PageController@list')->name('list');
Route::get('about.html','PageController@about')->name('about');
Route::get('detail/{title}.html','PageController@detail')->name('detail');
Route::get('next','PageController@next')->name('next');
Route::get('next_update.html','PageController@nextupdate')->name('nextupdate');
Route::get('search','PageController@search')->name('search');
Route::post('postStoryUser.html','PageController@postStoryUser')->name('postStoryUser')->middleware('auth');

Route::get('loginUser.html','UserController@loginUser')->name('loginUser');
Route::get('registerUser.html','UserController@register')->name('registerUser');
Route::get('email_sub','UserController@email_sub')->name('email_sub');

//ADMIN
Route::get('manager/loginAdmin',function(){
		return view('admin.loginAdmin');
	})->name('loginAdmin');
Route::post('manager/loginAdmin','AdminController@postLogin')->name('postLogin');
Route::group(['prefix'=>'manager','middleware'=>'auth:admin'],function(){
	Route::get('/',function(){
		return view('admin.master'); 
	})->name('admin.master');
	// admin
	Route::get('registerAdmin',function(){
		return view('admin.registerAdmin');
	});
	Route::post('registerAdmin','AdminController@postRegister')->name('registerAdmin');
    Route::get('logoutAdmin','AdminController@logout')->name('logoutAdmin');
	
	// stories
	Route::get('stories','AdminController@stories')->name('admin.stories');
	Route::get('edit/{id}','AdminController@edit')->name('admin.edit');
	Route::post('postEdit/{id}','AdminController@postEdit')->name('admin.postEdit');
	Route::get('add','AdminController@add')->name('add');
	Route::post('postAdd','AdminController@postAdd')->name('admin.postAdd');
	Route::get('delete/{id}','AdminController@delete');
	// gallery
	Route::get('galleries','AdminController@galleries')->name('admin.galleries');
	Route::post('addGallery','AdminController@addGallery')->name('admin.addGallery');
	Route::get('editGallery/{id}','AdminController@editGallery')->name('admin.editGallery');
	Route::post('postEditGallery/{id}','AdminController@postEditGallery')->name('admin.postEditGallery');
	Route::get('galleries/{id}','AdminController@gallery')->name('admin.gallery');
	Route::get('delete_gallery','AdminController@deleteGallery');
	//notes
	Route::get('notes','AdminController@notes')->name('admin.notes');
	Route::post('addNote','AdminController@addNote')->name('admin.addNote');
	Route::get('deleteNote/{id}','AdminController@deleteNote');
	Route::get('editNote/{id}','AdminController@editNote')->name('editNote');
	Route::post('postEditNote/{id}','AdminController@postEditNote')->name('admin.postEditNote');
	//seaarch
	Route::get('search','AdminController@search')->name('admin.search');
	//stories_user
	Route::get('stories_user','AdminController@stories_user')->name('admin.stories_user');
	Route::get('view/{id}','AdminController@view')->name('admin.view');
	Route::get('post/{id}','AdminController@post');
	Route::get('users','AdminController@user')->name('admin.user');
});

