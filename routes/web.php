<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;




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
    return view('front.home');
});

// Route::get('/',[BaseController::class,'index'])->name('home');
Route::get('/home',[BaseController::class,'index'])->name('home');
Route::get('/productView',[BaseController::class,'productView'])->name('productView');
Route::get('/cart',[BaseController::class,'cart'])->name('cart');
Route::get('/checkOut',[BaseController::class,'checkOut'])->name('checkOut');
Route::get('/rough/checkOut',[BaseController::class,'rough'])->name('rough');
Route::get('/groceries',[BaseController::class,'groceries'])->name('groceries');
Route::get('/recipes',[BaseController::class,'recipes'])->name('recipes');
Route::get('/contact_Us',[BaseController::class,'contact'])->name('contact');
Route::get('/about_Us',[BaseController::class,'about'])->name('about');
Route::get('/wishlist',[BaseController::class,'wishlist'])->name('wishlist');
Route::get('/seller',[BaseController::class,'sellerHome'])->name('sellerHome');
Route::get('/user/register',[BaseController::class,'register'])->name('register');
Route::get('/user/login',[BaseController::class,'login'])->name('login');
Route::get('/specialOffer',[BaseController::class,'specialOffer'])->name('specialOffer');
Route::get('/sellerOrders',[BaseController::class,'sellerOrders'])->name('sellerOrders');
Route::get('/sellerGrocery',[BaseController::class,'sellerGrocery'])->name('sellerGrocery');
Route::get('/sellerRecipe',[BaseController::class,'sellerRecipe'])->name('sellerRecipe');
Route::get('/orders',[BaseController::class,'orders'])->name('orders');

// Admin routes
Route::get('/dashboard',[AdminController::class,'index'])->name('dash');

Route::get('seller/add',[SellerController::class,'create'])->name('seller.create');
Route::post('seller/add',[SellerController::class,'store'])->name('seller.store');
Route::get('sellers',[SellerController::class,'index'])->name('sellers.list');
Route::get('seller/edit/{id}',[SellerController::class,'edit'])->name('seller.edit');
Route::post('seller/edit/{id}',[SellerController::class,'update'])->name('seller.update');
Route::get('seller/delete/{id}',[SellerController::class,'delete'])->name('seller.delete');

// user routes
Route::get('user/add',[UserController::class,'create'])->name('user.create');
Route::get('users',[UserController::class,'index'])->name('users.list');
Route::get('user/delete/{id}',[SellerController::class,'delete'])->name('user.delete');

// category Controllers
Route::get('category/add',[CategoryController::class,'create'])->name('category.create');
Route::post('category/add',[CategoryController::class,'store'])->name('category.store');
Route::get('categories',[CategoryController::class,'index'])->name('category.list');
Route::get('categories/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('categories/edit/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('categories/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

// Product routes
Route::get('/products',[ProductController::class,'index'])->name('product.list');
Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
Route::post('/products/create',[ProductController::class,'store'])->name('product.store');
Route::get('products/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('products/edit/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('products/delete/{id}',[ProductController::class,'delete'])->name('product.delete');




// rough testing
Route::get('/home',[HomeController::class,'index'])->name('rough');












Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
