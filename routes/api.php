<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BillControllerr;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/alluser',[UserController::class, 'index'])->name('alluser.index');
Route::get('/bill',[BillControllerr::class, 'index'])->name('bill.index');
Route::post('/bill', [BillControllerr::class, 'store'])->name('bill.store');
Route::put('/bill/{id}', [BillControllerr::class, 'update'])->name('bill.update');
Route::delete('bill/{id}',[BillControllerr::class, 'destroy'])->name('bill.destroy');


