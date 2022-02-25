<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;


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

// rough testing
Route::get('/home',[HomeController::class,'index'])->name('rough');












Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
