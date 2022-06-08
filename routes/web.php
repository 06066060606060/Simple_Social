<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('index');
});

<<<<<<< HEAD
Route::view('/test', 'test');

Route::view('/ProfileTest', 'ProfileTest');

// la partie authentication

=======
>>>>>>> edac13baad9baf897e037251ab7e15044591b1b1
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');

Route::post('/registration', [AuthController::class, 'registration'])->name('registration');

Route::get('/login', [AuthController::class, 'logged'])->name('login');

Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
