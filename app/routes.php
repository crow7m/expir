<?php

Route ::get ('/',function(){
    return View::make('index');
});


Route::get('Send',array('as'=>'SendForm','uses'=>'Features@Send'));

Route::get('/Admin/admin',array('as'=>'Admin/admin','uses'=>'AuthController@HiAdmin','before'=>'auth'));


Route::get('/Admin/login',array('as'=>'user-login','uses'=>'AuthController@getLogin'));

Route::get('/',array('as'=>'Logout','uses'=>'AuthController@out'));

Route::post('/Admin/login',['uses'=>'AuthController@postLogin']);

/*News getting out from database functional*/
Route::get('/Admin/news',array('as'=>'news','uses'=>'NewsController@getNews',array('before' => 'auth')));

Route::get('/Admin/news/{id}',array('as'=>'get-New','uses'=>'NewsController@getNew',array('before' => 'auth')));

//route for news delete functional from admin panel
Route::get('/Admin/news{id}',array('as'=>'delete_news','uses'=>'NewsController@delete',array('before' => 'auth')));


Route::post('/Admin/edit',array('as'=>'PostNews','uses'=>'PublishNewsController@PublishNews',array('before' => 'auth')));

Route::get('/Admin/edit',array('as'=>'Create_news','uses'=>'PublishNewsController@createNews',array('before' => 'auth')));

//route for public news view with checked news
Route::get('/',array('as'=>'publicNews','uses'=>'PublicNewsController@publicNews'));

//route for getting detail view of specified new
Route::get('/{id}',array('as'=>'get_public_news','uses'=>'PublicNewsController@public_news'));

//route for language change

Route::post('/language',array('as'=>'language','uses'=>'LanguageController@lang'));

//route for feedbackForm down the page with the circle background
Route::post('/',array('before' => 'csrf','as'=>'feed_back_form','uses'=>'FeedBackController@feedback'));






