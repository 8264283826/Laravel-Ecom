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
    return view('website.frontend.layout.main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/dashboard', function () {
//     return view('website.backend.layout.main');
// });
Route::get('/dashboard','BackendController@index')->name('backend.index');
Route::resource('/dashboard/productcategory','ProductCategoryController');
Route::resource('/dashboard/product','ProductController');
Route::resource('/dashboard/productimage','ProductImageController');

// Route::get('/shop', function () {
//     return view('website.otherpage.shop');
// });
// Route::get('/product_details', function () {
//     return view('website.otherpage.product_details');
// });
// Route::get('/cart', function () {
//     return view('website.otherpage.cart');
// });
// Route::get('/blog', function () {
//     return view('website.otherpage.blog');
// });
// Route::get('/blog-details', function () {
//     return view('website.otherpage.blog_details');
// });
// Route::get('/login', function () {
//     return view('website.otherpage.login');
// });
// Route::get('/elements', function () {
//     return view('website.otherpage.elements');
// });
// Route::get('/confirmation', function () {
//     return view('website.otherpage.confirmation');
// });
// Route::get('/checkout', function () {
//     return view('website.otherpage.checkout');
// });
// Route::get('/about', function () {
//     return view('website.otherpage.about');
// });
// Route::get('/contact', function () {
//     return view('website.otherpage.contact');
// });