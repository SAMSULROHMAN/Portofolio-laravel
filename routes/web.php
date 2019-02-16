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
//Route::get('/', 'HomeController@index');

//Route::resource('/task', 'TaskController');



route::resource('biodata','BiodataController');

Route::resource('produk', 'ProdukController');

Route::get('/pdf','ProdukController@pdf');

Route::get('/pdf2','BiodataController@pdf');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

/*Route::group([
    'middleware' => ['web','auth'],function() {
        Route::get('/', function ($id) {
            return view('welcome');
        });

        Route::get('/home',function(){
            if(Auth::user()->admin == 0) {
                return view('home');
            }else{
                $users['users'] = \App\User::all();
                return view('adminhome',$users);
            }
        });
    }
]);*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
        return view('index');
    });



