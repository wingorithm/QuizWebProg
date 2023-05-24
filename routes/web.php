<?php

use App\Http\Controllers\gbController;
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
//     return view('home');
// });

Route::get('/',[gbController::class, 'index'])->name('home');
Route::get('/detail/{bookid}',[gbController::class, 'detail'])->name('detail');
Route::get('/category/{catid}',[gbController::class, 'category'])->name('category');

Route::get('/publiser',[gbController::class, 'publist'])->name('publisher');
Route::get('/publiser/{pubid}',[gbController::class, 'pubdecs'])->name('pubdecs');

Route::get('/contactus',[gbController::class, 'contact'])->name('contact');