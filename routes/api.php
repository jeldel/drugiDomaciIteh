<?php

use App\Http\Controllers\MenuTestController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserOrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/menus', [MenuTestController::class, 'index']);
//Route::get('/menus/{id}', [MenuTestController::class, 'show']);

//Route::resource('menus', MenuController::class);

//Route::resource('orders', OrderController::class);

//prvi način prikazivanja
Route::get('users/{id}',[UserController::class, 'show'])->name('users.show');
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}/orders', [UserOrderController::class, 'index'])->name('users.orders.index');


//pravljenje ugnježdene resurs rute
Route::get('menus/{id}',[MenuController::class, 'show'])->name('menus.show');
Route::get('/menus',[MenuController::class, 'index'])->name('menus.index');
Route::resource('orders', OrderController::class);
Route::resource('menus.orders', MenuOrderController::class)->only(['index']);