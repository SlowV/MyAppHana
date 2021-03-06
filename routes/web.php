<?php

use Illuminate\Support\Facades\Auth;
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


//Route Checkout giỏ hàng.
Route::post('/user/checkout-cart','UserController@checkoutCart')->name('checkoutCart');

//Route update sản phẩm trong giỏ hàng.
Route::get('/user/update-product-cart/{rowId}/{qty}','UserController@updateProductInCart');

// Route xóa sản phẩm trong giỏ hàng
Route::delete('/user/delete-cart/{rowid}', 'UserController@productDelete');

// View Sale.
Route::get('/user/product-sale','UserController@getProductSale')->name('viewSaleClient');

// View bài viết
Route::get('/user/blog','UserController@getBlog')->name('viewBlogClient');

// View liên hệ
Route::get('/user/contact','UserController@getContact')->name('viewContactClient');

// Admin Product
Route::delete('/admin/product/delete-all', "ProductController@destroyMany");

Route::resource('/admin/product', 'ProductController');


Route::get('/', function (){
    return view('welcome');
});


// Lấy 1 san phẩm
Route::get('/admin/product/get-json/{id}', 'ProductController@getJson');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route update sản phẩm trong giỏ hàng.
Route::get('user/update-product-cart/{rowId}/{qty}', 'UserController@updateProductInCart');

// Route xóa sản phẩm trong giỏ hàng
Route::delete('/user/delete-cart/{rowid}', 'UserController@productDelete');

//Route Checkout giỏ hàng.
Route::post('/user/checkout-cart', 'UserController@checkoutCart')->name('checkoutCart');


// Route get sản phẩm bằng input tìm kiếm.
Route::get('/hanastore/api/search/{value}', 'UserController@getProductBySearchApi');

// Route lọc theo giá
Route::get('/hanastore/api/product-filter/{startPrice}/{endPrice}', 'UserController@getProductFilterApi');

// Route User Controller Client
Route::get('/hanastore/home', 'UserController@getIndexUser')->name('homeClient');

// Route view giỏ hàng Client
Route::get('/hanastore/cart', 'UserController@getCart')->name('giohang');

// Route thêm vào giỏ hàng Client
Route::post('/hanastore/add-cart/{id}', 'UserController@productBuy');

// Route view list sản phẩm Client
Route::get('/hanastore/list-product', 'UserController@listProduct')->name('listProductClient');

// Route view sản phẩm chi tiết Client
Route::get('/hanastore/product/{id}', 'UserController@getProductDetail');

//View list product sale
Route::get('/hanastore/sale', 'UserController@getIndexProductSale')->name('saleClient');

//Route view bài viết
Route::get('/hanastore/blog', 'UserController@blogList')->name('blogClient');

//Route view bài viết chi tiết.
Route::get('/hanastore/blog/{id}', 'UserController@getBlogDetail');

//Route view liên hệ
Route::get('/hanastore/contact', 'UserController@contact')->name('contactClient');

//Route view my order for Client
Route::get('/hanastore/my-order', 'UserController@myOrder')->name('myOrder');


// Route login socialite Client
Route::get('auth/google', 'GoogleController@redirectToProvider');
Route::get('auth/google/callback', 'GoogleController@handleProviderCallback');

Route::get('auth/facebook', 'FacebookAuthController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'FacebookAuthController@handleProviderCallback');



