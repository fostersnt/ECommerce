<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
    return view('User.UserHome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* Admin Routes */
Route::get('/redirect', [AdminController::class, 'redirect']);
Route::get('/product', [AdminController::class, 'product']);
Route::post('/uploadproduct', [AdminController::class, 'UploadProduct']);
Route::get('/deleteproduct/{id}', [AdminController::class, 'DeleteProduct']);
Route::get('/updateview/{id}', [AdminController::class, 'UpdateView']);
Route::post('/updateproduct/{id}', [AdminController::class, 'UpdateProduct']);
Route::get('/export', [AdminController::class, 'ExportProducts']);

/* User Routes */
Route::get('/', [UserController::class, 'index']);

