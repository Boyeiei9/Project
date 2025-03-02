<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//start
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserProjectController;




Route::resource('projects', ProjectController::class);
Route::resource('employees', EmployeeController::class);



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('admin.projects.show');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/projects/{id}', [UserProjectController::class, 'show'])->name('user.projects.show');
});

Route::get('/projects', function () {
    return view('projects/index');
})->middleware('auth') ;


Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

//new

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserProjectController::class)->only(['index', 'show']);
    
});

// routes/web.php
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('projects', ProjectController::class);
});


// // Route สำหรับ User
// Route::middleware(['auth'])->group(function () {
//     Route::get('/user/projects', [UserProjectController::class, 'index'])->name('user.projects.index');
//     Route::get('/user/projects/{id}', [UserProjectController::class, 'show'])->name('user.projects.show');

//     // ให้ User สามารถดู Users ได้
//     Route::resource('users', UserProjectController::class)->only(['index', 'show']);
// });

// // Route สำหรับ Admin
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
// });




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth')->name('dashboard');




