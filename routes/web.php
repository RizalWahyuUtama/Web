<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
//     return view('home');
// });

Route::get('/', [Controller::class, 'index']);
Route::get('/kantin1', [Controller::class, 'kantin1']);
Route::get('/kantin2', [Controller::class, 'kantin2']);
Route::get('/kantin3', [Controller::class, 'kantin3']);
Route::post('/simpanpesanan', [Controller::class, 'simpanpesanan']);