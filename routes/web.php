<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\SearchFormController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', function () {
    $user = User::get()->where('id' , Auth::id());
    return Inertia::render('Profile', ['users' => $user]);
})->middleware(['auth', 'verified'])->name('profile');

Route::post('/submit', [SearchFormController::class, 'submit'])->middleware(['auth', 'verified'])->name('submit');
Route::post('/userUpdate', [UserController::class, 'update'])->middleware(['auth', 'verified'])->name('userUpdate');
Route::get('/userDelete', [UserController::class, 'delete'])->middleware(['auth', 'verified'])->name('userDelete');

require __DIR__.'/auth.php';




?>