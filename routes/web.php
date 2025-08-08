<?php

use App\Http\Controllers\AddUsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function () {
return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Dashboard To View , Add , Update , Delete Users //
Route::controller(AddUsersController::class)->group(function () {
Route::get('/view_users', 'index')->middleware(['auth', 'admin'])->name('view_users');
Route::post('/add_user', 'store')->middleware(['auth', 'admin']);
Route::get('/edit_user/{id}', 'edit')->middleware(['auth', 'admin']);
Route::post('/update_user/{id}', 'update')->middleware(['auth', 'admin']);
Route::get('/delete_user/{id}/{name}',   'destroy')->middleware(['auth', 'admin']);
});
/////////////////////////////////////////////////////



// Admin And Users Dashboard To View , Add , Update , Delete Posts //
Route::controller(PostController::class)->group(function () {
Route::get('/', 'show');
Route::get('/author/{id}', 'author');
Route::get('/view_posts', 'index')->middleware(['auth', 'verified'])->name('view_posts');
Route::post('/add_post', 'store')->middleware(['auth']);
Route::get('/edit_post/{id}', 'edit')->middleware(['auth']);
Route::post('/update_post/{id}', 'update')->middleware(['auth']);
Route::get('/delete_post/{id}/{title}', 'destroy')->middleware(['auth']);
});
/////////////////////////////////////////////////////



require __DIR__.'/auth.php';
