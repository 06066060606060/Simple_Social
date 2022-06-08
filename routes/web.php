<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('index')->name('index');
});

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');

Route::post('/registration', [AuthController::class, 'registration'])->name('registration');

Route::get('/login', [AuthController::class, 'logged'])->name('login');

Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

<<<<<<< HEAD
Route::get('/', [AuthController::class, 'boucleBackend']);

Route::delete('/delete/{id}', [AuthController::class, 'delete'])->whereNumber('id')->name('delete');

Route::post('/update/{id}', [AuthController::class, 'update'])->whereNumber('id')->name('update');

=======
Route::get('/', [Controller::class, 'boucleBackend']);

Route::delete('/delete/{id}', [Controller::class, 'delete'])->whereNumber('id')->name('delete');

Route::post('/update/{id}', [Controller::class, 'update'])->whereNumber('id')->name('update');
>>>>>>> 7f4987fc1a856e823e98ae3f4b11564985f8841f
