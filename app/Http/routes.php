<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
Route::get('/phpinfo', function (){
    phpinfo();
});
Route::get('/get/gallery/{id}', 'Blog\BlogController@get_gallery');
Route::post('/set/image/{galeria}', 'Blog\BlogController@set_image');
Route::post('/set/update/image/{obraz}', 'Blog\BlogController@update_image');



Route::auth();

Route::get('/system/', 'PanelController@index');
Route::get('/system/account/details', 'PanelController@details');
Route::post('/system/account/details', 'PanelController@details_update');
Route::get('/system/account/users', 'PanelController@users');
Route::post('/system/account/users/add', 'PanelController@user_new');
Route::get('/system/account/users/{osoba}', 'PanelController@user');
Route::post('/system/account/users/{osoba}', 'PanelController@user_update');
Route::get('/system/account/users/{osoba}/kill', 'PanelController@user_delete');

/**
 * Blog panel routes 
 */
Route::get('/system/blog/posty', 'Blog\BlogController@posts');
Route::post('/system/blog/posty', 'Blog\BlogController@post_new');
Route::get('/system/blog/posty/{post}', 'Blog\BlogController@post');
Route::post('/system/blog/posty/{post}', 'Blog\BlogController@post_update');

Route::get('/system/blog/galerie', 'Blog\BlogController@galleries');
Route::post('/system/blog/galerie', 'Blog\BlogController@gallery_new');
Route::get('/system/blog/galerie/{galeria}', 'Blog\BlogController@gallery');
Route::post('/system/blog/galerie/{galeria}', 'Blog\BlogController@gallery_update');
Route::get('/system/blog/galerie/{galeria}/delete', 'Blog\BlogController@gallery_delete');

Route::get('/system/blog/galerie/{galeria}/{obraz}', 'Blog\BlogController@image');
Route::post('/system/blog/galerie/{galeria}/{obraz}', 'Blog\BlogController@image_update_info');
Route::get('/system/blog/galerie/{galeria}/{obraz}/delete', 'Blog\BlogController@image_delete');



/**
 * Blog www routes 
 */
Route::get('/', 'HomeController@index');

Route::get('/aktualnosci', 'HomeController@blog');

Route::get('/preview/{id}', 'HomeController@preview');

Route::get('/aktualnosci/{url}', [
    'uses' => 'HomeController@post'
])->where('url', '([A-Za-z0-9\-\/\_]+)');

Route::get('/dla-zwiedzajacych', function (){
    return view('for_visitors');
});

Route::get('/dla-wystawcow', function (){
    return view('for_exhibitors');
});

Route::get('/reklama', function (){
    return view('comm');
});

Route::get('/dojazd', function (){
    return view('drive');
});

Route::get('/regulamin', function (){
    return view('regulations');
});

Route::get('/kontakt', function (){
    return view('contact');
});

Route::get('/o-targach', function (){
    return view('about');
});

Route::get('/idea', function (){
    return view('idea');
});

Route::get('/zgloszenia', function (){
    return view('applications');
});

Route::get('/galeria', function (){
    return view('gallery');
});

Route::get('/galeria/1', function (){
    return view('gallery-1');
});

Route::get('/do-pobrania', function (){
    return view('download');
});