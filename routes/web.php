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

Route::get('/', [Controller::class, 'Mur']);

Route::get('/interest', [Controller::class, 'interest']);

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');

Route::post('/registration', [AuthController::class, 'registration'])->name('registration');

Route::get('/login', [AuthController::class, 'logged'])->name('login');

Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profil', [Controller::class, 'boucleProfil']);

Route::get('/amis', [Controller::class, 'listeAmis']);

Route::post('/addpost', [Controller::class, 'AddPost']);

Route::get('/backend', [Controller::class, 'boucleBackend'])->name('backend');

Route::delete('/delete/{id}', [Controller::class, 'delete'])->whereNumber('id')->name('delete');

Route::delete('/deletePost/{id}', [Controller::class, 'deletePost'])->whereNumber('id')->name('deletePost');

Route::post('/update/{id}', [Controller::class, 'update'])->whereNumber('id')->name('update');


Route::post('/updatePost/{id}', [Controller::class, 'updatePost'])->whereNumber('id')->name('updatePost');

