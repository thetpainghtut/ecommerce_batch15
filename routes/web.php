<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     // return view('frontend.index');
//   return view('welcome');
// });

// Frontend

Route::get('/','frontend\FrontendController@index')->name('main');

Route::get('shop/{id}','frontend\FrontendController@shop')->name('shop');


Route::get('load-more-data','frontend\FrontendController@more_data')->name('loadmore');

Route::get('shopdetail/{id}','frontend\FrontendController@shopdetail')->name('shopdetail');

Route::get('cart','frontend\FrontendController@cart')->name('cart');

// backend

Route::get('dashboard','backend\BackendController@index')->name('dashboard');

Route::resource('categories','backend\CategoryController');

Route::resource('subcategories','backend\SubcategoryController');

Route::resource('brands','backend\BrandController');

Route::resource('users','backend\UserController');

Route::resource('items','backend\ItemController');

Route::resource('orders','backend\OrderController');

Route::get('reports','backend\BackendController@report')->name('order_reports');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
