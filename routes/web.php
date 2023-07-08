<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
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

// Route::group(['middleware' == 'web'], function () {
//Student Register and Crud
Route::get('/students', [StudentController::class, 'index']);
Route::get('/create', [StudentController::class, 'create']);
Route::post('/store', [StudentController::class, 'store']);
Route::get('/edit/{student}', [StudentController::class, 'edit']);
Route::put('/{student}', [StudentController::class, 'update']);
Route::delete('/{student}', [StudentController::class, 'destroy']);

// Student Login $ Dashboard
Route::get('/', [LoginController::class, 'index']);
Route::get('/user', [LoginController::class, 'show']);
Route::get('/login', [LoginController::class, 'create']);
Route::post('/login/store', [LoginController::class, 'store']);

// Admin Register $ Login With Student Details
Route::get('/admin/login', [AdminController::class, 'create']);
Route::post('/store/admin', [AdminController::class, 'store']);
// });
