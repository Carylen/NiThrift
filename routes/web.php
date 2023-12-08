<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserController;

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
    return view('landingPage');
});

Route::get('/detail',  function(){
    return view('detailProduct');
});
Route::get('/create', function(){
    return view('addProduct');
});

Route::get('/login', [UserController::class, 'index']);// --> untuk direct ke loginPage.blade.php

Route::post('/login/request', [UserController::class, 'login']); // --> untuk proses Authentication pada saat login

Route::get('/register', [UserController::class, 'toRegister']); // --> untuk direct ke registerPage.blade.php

Route::post('/register/request', [UserController::class, 'register']); // --> untuk proses Registration sekaligus Authentication (Auto Login After Regist)

Route::get('/profileSettings/{id}', [UserController::class, 'profileSettings']);

Route::post('/profileSettings/update/{id}', [UserController::class, 'updateProfileSettings'])->name('updateProfile');

Route::get('/profileSettings/delete/{id}', [UserController::class, 'destroyImage'])->name('deleteImage');

// Route::post('profileSettings/image', [UserController::class, 'updateProfileSettings']);

Route::get('logout', [UserController::class,'logout']);

Route::post('/create', [ProductController::class, 'store'])-> name('storeproduct');