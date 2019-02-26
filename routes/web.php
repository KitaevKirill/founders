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

use App\Setting;

Route::get('/', 'IndexController@homeIndex');
Route::get('/art{id}', 'ArticlesController@view')->where('id', '[0-9]+');
Route::get('/post001', 'ArticlesController@newPost1Controller');
Route::get('/post002', 'ArticlesController@newPost2Controller');
Route::get('/post003', 'ArticlesController@newPost3Controller');
Route::get('/post004', 'ArticlesController@newPost4Controller');
Route::get('/post005', 'ArticlesController@newPost5Controller');
Route::post('/{id}/addComment', 'CommentsController@Store');
Route::get('/offer', 'ArticlesController@offerController');
Route::get('/KristinaDavidova', 'AuthorsController@KristinaDController');

Route::get('/postconstruct1/{id}', 'PostsConsrtuctController@StepOne');
Route::post('/postconstruct1/{id}', 'PostsConsrtuctController@StepOneStore');
Route::get('/postconstruct2/{id}', 'PostsConsrtuctController@StepTwo');
Route::post('/postconstruct2/{id}', 'PostsConsrtuctController@StepTwoStore');
Route::post('/uploadBrush/{id}', 'PostsConsrtuctController@uploadBrushStore');
Route::get('/generateImage/{id}', 'PostsConsrtuctController@generateImage');
Route::get('/postconstruct3/{id}', 'PostsConsrtuctController@StepThree');
Route::post('/postconstruct3/{id}', 'PostsConsrtuctController@StepThreeStore');
Route::get('/fullpreview', 'PostsConsrtuctController@fullPreview');
Route::post('/postsave', 'PostsConsrtuctController@add');
Route::get('/postsave', 'PostsConsrtuctController@add');
Route::get('/file', 'PostsConsrtuctController@file');
Route::post('/uploadAvatar', 'AdminController@uploadAvatar');
Route::get('/usersettings', 'AdminController@userSettings');
Route::get('/mail', 'MailController@send');
Route::patch('/checkcategory{id}', 'AdminController@checkCategory');
Route::get('/test', 'TestController@test');
Route::get('/geo', 'GeoController@SxGeo');
Route::get('/search', 'SearchController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/paper', 'NewPostsController');

Route::get('locale/{locale}', function ($locale) {
    Setting::updateOrCreate(['name' => 'locale'], ['value' => $locale]);
    return redirect('/');//$locale;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
