<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', 'API\AuthController@register');
Route::post('/login', 'API\AuthController@login');
Route::get('/category', 'API\CategoryController@category');
Route::get('/category/food', 'API\CategoryController@FoodCategory');
Route::get('/category/drink', 'API\CategoryController@DrinkCategory');
Route::get('/store/{category_id}', 'API\FoodDrinkController@StoreCategory');

Route::post('/food/{store_id}', 'API\FoodDrinkController@store');

