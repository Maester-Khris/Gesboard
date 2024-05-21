<?php

use App\Http\Controllers\ProfileController;  
use App\Http\Controllers\DashController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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



Route::get('/', [DashController::class, 'index']);
Route::get('/posts/{id}/description', [DashController::class, 'show']);
Route::post('/posts', [DashController::class, 'store']);
Route::get('/posts', [DashController::class, 'list']);
Route::get('/posts/create', [DashController::class, 'create']);
