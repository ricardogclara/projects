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
/*Route::group(['middleware' =>['web']], function(){
Route::get('/bares/{bare}/edit','BaresController@edit');
Route::get('/bares/adicionar_bar','BaresController@adicionar');

});
*/
Route::get('/', function () {
	   Blade::setContentTags('{{', '}}', false);    
   // make sub views
    $view1 = view('frontViews/index');    
//    $view2 = view('front_pages/contacto');   
    return view('layouts/front_layout',['view1' => $view1]);
 
});
/*
Auth::routes();

Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/bares', ['as' => 'bares', 'uses' => 'BaresController@index']);
Route::get('/flyers', ['as' => 'flyers', 'uses' => 'FlyersController@index']);*/
Auth::routes();

Route::get('/home', 'HomeController@index');
