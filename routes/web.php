<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\navRoute;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

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

Route::get('/', [navRoute::class, 'home'])->name('home');
Route::get('/contact', [navRoute::class, 'contact']);
Route::get('/about', [navRoute::class, 'about']);

Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/users/views', [UserController::class, 'views'])->name('views');
Route::get('/users/trash', [UserController::class, 'trash'])->name('trash');
Route::get('/users/delete/{id}', [UserController::class, 'delete'])->name('users.delete');
Route::get('/users/restore/{id}', [UserController::class, 'restore'])->name('users.restore');
Route::get('/users/fdelete/{id}', [UserController::class, 'fdelete'])->name('users.forceDelete');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');


// tesign session
Route::get('/get-ses', function () {
    p(session()->all());
});

Route::get('/set-ses', function (Request $request) {
    $request->session()->put('user', 'hi');
    $request->session()->put('status', '1');
    return redirect('/get-ses');
});
Route::get('/des-ses', function (Request $request) {
    $request->session()->forget('user', 'hi');
    $request->session()->forget('status', '1');
    return redirect('/get-ses');
});
