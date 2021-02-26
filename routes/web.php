<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	if(Auth::check()){return Redirect::to('home');}
    return view('welcome');
})->name('main');

Auth::routes();

// Route::group(['prefix' => 'admin'], function () {
// 	Route::get('/login', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');
// 	Route::post('/login', 'Auth\LoginController@adminLogin')->name('admin.login.submit');

// 	Route::get('/', 'AdminController@index')->name('admin.dashboard');
// });

// Route::group(['middleware' => ['auth:admin']], function () {
// 	Route::resource('/role', 'RoleController');
// 	Route::resource('/user', 'UserController');
// 	Route::resource('/category', 'CategoryController');
// });

Route::group(['middleware' => ['auth']], function () {
	Route::get('/home', 'HomeController@index')->name('home');
	
	
	Route::get('/profile', 'ProfileController@index');
	Route::get('/friends', 'ProfileController@friend');
	Route::get('/photos', 'ProfileController@photo');

	Route::get('/setting', 'ProfileController@setting')->name('setting');
	Route::post('/settings', 'ProfileController@saveSetting')->name('saveSetting');
	Route::post('/password', 'ProfileController@savePassword')->name('savePassword');
	Route::post('/profile-picture', 'ProfileController@savePicture')->name('savePicture');

	Route::resource('/post','PostController');

	Route::post('/share','PostController@share')->name('share');

	Route::get('/getlike','PostController@getlike');
	Route::post('/like/{id}','PostController@like');

	Route::get('/getcomment', 'PostController@getcomment');
	Route::get('/getcommentmin', 'PostController@getcommentmin');
	Route::get('/getcount', 'PostController@getCount');

	Route::post('/comment', 'PostController@comment');

	Route::get('/getFriend', 'FriendController@getFriend');
	Route::post('/sendRequest', 'FriendController@sendRequest');
	Route::post('/cancelRequest', 'FriendController@cancelRequest');
	Route::post('/rejectRequest', 'FriendController@rejectRequest');
	Route::post('/acceptRequest', 'FriendController@acceptRequest');
	Route::post('/removeFriend', 'FriendController@removeFriend');

	Route::get('/user/profile/{id}', 'ProfileController@person')->name('profiles');
	// Route::get('/user/profile/{id}/friends', 'ProfileController@person')->name('profiles.friend');
	Route::get('/user/profile/{id}/photos', 'ProfileController@person_photos')->name('profiles.photo');

	//Blog Route
	Route::get('/blog', 'BlogController@index')->name('blog');
	Route::post('/bloginsert', 'BlogController@blogInsert')->name('bloginsert');
	Route::post('/insert_comment', 'BlogController@insert_comment')->name('insert_comment');

});
