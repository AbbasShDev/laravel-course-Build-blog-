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

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact-us', "ContactPage@contact");
Route::post('contact-us', "ContactPage@storeSession");
Route::get('about-us', "ContactPage@about");
Route::get('remove-session-name', "ContactPage@removeName");

//Route::get('contact-us', function (){
//    return view('contact-us');
//})->middleware('checkDay');

//Route::post('contact-us', function (){
//   echo 'Send';
//});

Route::put('contact-us', function (){
   echo 'Put Send';
});

Route::get('system-closed', function (){
   return "Sorry we Only open at Monday";
});

//Route::get('category/{category}/product/{product}', function ($category, $product){
//   echo "The category is $category and the product is $product";
//});

Route::get('products/{product}/category/{category?}', function ($product, $category = null){
    echo "The product is $product and the category is $category";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('articles', 'ArticleController');
