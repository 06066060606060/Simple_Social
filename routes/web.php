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

Route::get('/print', function () {
    return view('print');
});

Route::get('/interest', [Controller::class, 'interest']);

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');

Route::post('/registration', [AuthController::class, 'registration'])->name('registration');

Route::get('/login', [AuthController::class, 'logged'])->name('login');

Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profil/{id}', [Controller::class, 'boucleProfil']);

Route::get('/amis', [Controller::class, 'listeAmis']);

Route::post('/addpost', [Controller::class, 'AddPost'])->name('addpost');

Route::post('/addcomm', [Controller::class, 'AddComm'])->name('addcomm');

Route::post('/addcommcomm', [Controller::class, 'AddCommcomm'])->name('addcommcomm');

Route::post('/PostLike', [Controller::class, 'PostLike'])->name('PostLike');

Route::post('/CommLike', [Controller::class, 'CommLike'])->name('CommLike');

Route::delete('/deleteUser/{id}', [AuthController::class, 'delete'])->whereNumber('id')->name('delete');

Route::get('/editUsers/{id}', [AuthController::class, 'getOneUser'])->whereNumber('id');

Route::post('/editerUser/{id}', [AuthController::class, 'editerUser'])->whereNumber('id')->name('editerUser');

Route::get('/interest', [Controller::class, 'CentreInterets']);

Route::get('/editPosts/{id}', [Controller::class, 'getOnePost'])->whereNumber('id');

Route::post('/editerPost/{id}', [Controller::class, 'editerPost'])->whereNumber('id')->name('editerPost');

Route::delete('/deletePost/{id}', [Controller::class, 'deletePost'])->whereNumber('id')->name('deletePost');
