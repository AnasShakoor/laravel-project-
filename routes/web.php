<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demo;
use App\Http\Controllers\singleaction;
use App\Http\Controllers\registration;
use App\Http\Controllers\registrationtwo;
use App\Http\Controllers\mycustomer;
use App\Models\creative;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/',[demo::class,'index']);
Route::get('/about',[demo::class,'about']);
Route::get('/courses',singleaction::class);
Route::get('/registar',[registration::class,'index'])->name('registar.page');
Route::post('/registar',[registration::class,'store']);
Route::get('/registar/view',[registration::class,'view']);
Route::get('/registar/delete/{id}',[registration::class,'delete'])->name('registar.delete');
Route::get('/registar/edit/{id}',[registration::class,'edit'])->name('registar.edit');
Route::post('/registar/update/{id}',[registration::class,'update'])->name('registar.update');
Route::post('/signup',[registration::class,'signup']);
Route::post('/login',[registration::class,'login']);
Route::get('/login',[registration::class,'loginView'])->name('registar.login');
Route::get('/signup',[registration::class,'signupView'])->name('registar.signup');
Route::get('/logout',[registration::class,'logout'])->name('registar.logout');








Route::get('/registar2',[registrationtwo::class,'index'])->name('registar2.page');
Route::post('/registar2',[registrationtwo::class,'store'])  ;
Route::get('/registar2/view',[registrationtwo::class,'index'])->name('registar2.page');
// Route::post('/registar2',[registrationtwo::class,'create']);







// 