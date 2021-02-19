<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'frontController@index');
Route::get('article/{slug}','frontController@article');
Route::get('category/{slug}', 'frontController@category');
Route::get('page/{slug}','frontController@page');
Route::get('contact-us','frontController@contactUs');
Route::post('sendmessage','crudController@insertData');
Route::get('gallery','frontController@gallery');
Route::get('aplikasi','frontController@aplikasi');


Route::get('post', 'frontController@post');
//admin
Route::get('web-admin', 'adminController@index');
//category
Route::get('viewcategory', 'adminController@viewCategory');
Route::post('addcategory', 'crudController@insertData');
Route::get('editcategory/{id}','adminController@editCategory');
Route::post('updatecategory/{id}', 'crudController@updateData');
Route::post('multipledelete','adminController@multipledelete');
//settings
Route::get('settings','adminController@settings');
Route::post('addsettings','crudController@insertData');
Route::post('updatesettings/{id}','crudController@updateData');
//post
Route::get('add-post','adminController@addPost');
Route::post('addpost','crudController@insertData');
Route::get('all-post','adminController@allPost');
Route::get('editpost/{id}','adminController@editPost');
Route::post('updatepost/{id}','crudController@updateData');
Route::get('search','frontController@search');
Route::get('deletepst/{id}','adminController@deletePst');
//pages
Route::get('add-page','adminController@addPage');
Route::post('addpage','crudController@insertData');
Route::get('all-pages','adminController@allPages');
Route::get('editpage/{id}','adminController@editPage');
Route::post('updatepage/{id}','crudController@updateData');
Route::get('deletepgs/{id}','adminController@deletePgs');
//Messages
Route::get('messages','adminController@messages');
Route::get('deletemsg/{id}','adminController@deleteMsg');
//Advertisement
Route::get('add-adv','adminController@addAdv');
Route::post('addadv','crudController@insertData');
Route::get('all-advs','adminController@allAdv');
Route::get('editadv/{id}','adminController@editAdv');
Route::post('updateadv/{id}','crudController@updateData');
Route::get('deleteadv/{id}','adminController@deleteAdv');
//slider
Route::get('add-slider','adminController@addSlider');
Route::post('addslider','crudController@insertData');
Route::get('all-sliders','adminController@allSlider');
Route::get('editslider/{id}','adminController@editSlider');
Route::post('updateslider/{id}','crudController@updateData');
Route::get('deleteslid/{id}','adminController@deleteSld');
//application
Route::get('add-app','adminController@addApp');
Route::post('addapp','crudController@insertData');
Route::get('all-app','adminController@allApp');
Route::get('editapp/{id}','adminController@editApp');
Route::post('updateapp/{id}','crudController@updateData');
Route::get('deleteapps/{id}','adminController@deleteApps');
//gal;ery
Route::get('form','FormController@create');
Route::post('form','FormController@store');

Route::get('add-gallery','adminController@addGallery');
Route::post('addgallery','crudController@insertData');
Route::get('all-gallery', 'FormController@allGallery');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('logout', 'HomeController@logout');
