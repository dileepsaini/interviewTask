<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BooksPdfController;
/*app\Http\Controllers\Auth\LoginController.php
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
    return view('auth.login');
});

Route::middleware('redirectIfAuthenticated')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::prefix('/dashboard')->controller(DashboardController::class)->group(function(){
        Route::get('/', 'index');
    });

    //books controller
    Route::prefix('/books')->controller(BooksPdfController::class)->group(function(){
        Route::get('/', 'index')->name('book.index');
        Route::get('/create', 'create')->name('book.create');
        Route::post('/store', 'store')->name('book.store');
        Route::get('/generate-pdf', 'generatePDF')->name('book.generatePDF');
    });
    
});