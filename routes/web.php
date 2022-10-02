<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\AdminController;



/* ---------------------------------- Admin Route ------------------------------- */

Route::controller(AdminController::class)->group(function(){
    
    Route::get('/admin/login','Index')->name('login_from');

    Route::get('/admin/dashboard','Dashboard')->name('admin.dashboard');
});

/* ---------------------------------- Admin Route ------------------------------- */



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
