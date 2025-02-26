<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ContactController::class,'index']);
Route::get('create', [ContactController::class,'create']);
route::post('store', [ContactController::class,'store']);
route::get('destroy/{id}', [ContactController::class,'destroy']);



