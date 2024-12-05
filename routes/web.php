<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('login');
});


Route::get('/hal1', function () {
    return view('hal1');
});

Route::get('/hal2', function () {
    return view('hal2');
});

Route::get('/hal3', function () {
    return view('hal3');
});

Route::get('/hal4', function () {
    return view('hal4');
});

Route::get('/hal5', function () {
    return view('hal5');
});


Route::get("/",[HomeController::class, 'login'])->name("login");
Route::get('/hal1', [HomeController::class, 'hal1'])->name('hal1');
Route::get('/hal2', [HomeController::class, 'hal2'])->name('hal2');
Route::get('/hal3', [HomeController::class, 'hal3'])->name('hal3');
Route::get('/hal4', [HomeController::class, 'hal4'])->name('hal4');
Route::get('/hal5', [HomeController::class, 'hal5'])->name('hal5');

