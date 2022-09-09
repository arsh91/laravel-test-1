<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UsersAuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompaniesController;


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

// Route::get('/user', [UserController::class, 'index']);
Route::get('/login',[UsersAuthController::class, 'getLogin'])->name('usersLogin');
Route::post('/login', [UsersAuthController::class, 'postLogin'])->name('usersLoginPost');
Route::get('/logout', [UsersAuthController::class, 'logout'])->name('usersLogout');

// Route::group(['prefix' => 'users','middleware' => 'usersauth'], function () {
	// Admin Dashboard
	Route::get('dashboard',[UsersController::class, 'dashboard'])->name('dashboard');
	Route::get('companies',[CompaniesController::class, 'index'])->name('companies');	
    // Route::get('/', function () {
    //     return view('welcome');
    // });
// });