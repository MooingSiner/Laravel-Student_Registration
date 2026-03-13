<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;

 
 Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
 
 
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
 
 
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
 
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/', [RegistrationController::class, 'home'])->name('home');
 
Route::get('/register', [RegistrationController::class, 'showForm'])->name('register.form');
 
Route::post('/register', [RegistrationController::class, 'submitForm'])->name('register.submit');


 