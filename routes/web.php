<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Signup;
use App\Http\Livewire\Home;
use App\Http\Livewire\Catalog;
use App\Http\Livewire\Products;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

// Auth Routes
Route::get('/auth/login', Login::class);
Route::get('/auth/signup', Signup::class);

Route::get('/', Home::class);
Route::get('/catalog', Catalog::class);
Route::get('/products', Products::class);
