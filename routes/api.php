<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VehicleController;

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

Route::middleware('auth:api')->post('/user', function (Request $request) {
    return $request->user();
});

Route::post("auth/login",[AuthController::class,'login']);
Route::get("auth/logout",[AuthController::class,'logout']);
Route::get("auth/attempt/{id}",[AuthController::class,'attempt']);

Route::get("users/{id?}",[UsersController::class,'list']);
Route::post("users/add",[UsersController::class,'add']);
Route::put("users/update",[UsersController::class,'update']);

Route::get("customer/{id?}",[CustomerController::class,'list']);
Route::post("customer/add",[CustomerController::class,'add']);
Route::put("customer/update",[CustomerController::class,'update']);
Route::delete("customer/delete/{id}",[CustomerController::class,'delete']);

Route::get("agency/{id?}",[AgencyController::class,'list']);
Route::post("agency/add",[AgencyController::class,'add']);
Route::put("agency/update",[AgencyController::class,'update']);

Route::get("category/{id?}",[CategoryController::class,'list']);
Route::post("category/add",[CategoryController::class,'add']);
Route::put("category/update",[CategoryController::class,'update']);

Route::get("manufacturer/{id?}",[ManufacturerController::class,'list']);
Route::post("manufacturer/add",[ManufacturerController::class,'add']);
Route::put("manufacturer/update",[ManufacturerController::class,'update']);

Route::get("model/{id?}",[ModelController::class,'list']);
Route::post("model/add",[ModelController::class,'add']);
Route::put("model/update",[ModelController::class,'update']);

Route::get("rental/{id?}",[RentalController::class,'list']);
Route::post("rental/add",[RentalController::class,'add']);
Route::put("rental/update",[RentalController::class,'update']);

Route::get("vehicle/{id?}",[VehicleController::class,'list']);
Route::post("vehicle/add",[VehicleController::class,'add']);
Route::put("vehicle/update",[VehicleController::class,'update']);

