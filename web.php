<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/',[UserController::class,'home']);
Route::get('display-category/{id}',[UserController::class,'displaycategory']);
Route::get('buy-product/{id}',[UserController::class,'buyproduct']);
Route::get('new-products',[UserController::class,'newproduct']);
Route::get('special-products',[UserController::class,'special']);
Route::get('all-products',[UserController::class,'allproducts']);
Route::get('contact',[UserController::class,'contact']);
Route::get('login',[UserController::class,'login']);
Route::post('login-user',[UserController::class,'loginuser']);
Route::post('signup',[UserController::class,'signup']);
Route::get('logout',[UserController::class,'logout']);
Route::post('add-quantity',[UserController::class,'addtocart']);
Route::get('checkout/{uid}',[UserController::class,'checkout']);
Route::post('search',[UserController::class,'search']);
Route::post('product-query',[UserController::class,'submitquery']);
Route::get('deleteproduct/{id}',[UserController::class,'deleteproduct']);
