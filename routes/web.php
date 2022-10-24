<?php

use App\Http\Controllers\dummy;
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

// Route::get('/', function () {
//     return view('app');
// });

Route::get('/',[dummy::class,'dashboard']);
Route::get('/rekap',[dummy::class,'index']);
Route::get('/input',[dummy::class,'index']);
