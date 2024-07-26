<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Models\karyawan;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

route::get('/leads',[KaryawanController::class,'index'])->name('leads.index');
//route::get('/leads/create',[KaryawanController::class,'create'])->name('leads.create');
//route::post('/leads',[KaryawanController::class,'store'])->name('leads.store');
route::get('/leads/{id}',[KaryawanController::class,'show'])->name('leads.show');
route::get('/leads/{id}/edit',[KaryawanController::class,'edit'])->name('leads.edit');
route::post('/leads/update/{id}',[KaryawanController::class,'update'])->name('leads');
route::post('/leads/delete/{id}',[KaryawanController::class,'delete'])->name('leads.delete');
route::get('/search',[KaryawanController::class,'search'])->name('leads.search');

route::resource('leads', KaryawanController::class);

Route::get('/leads_setting', function () {
    return view('leads_setting');
});

Route::get('/leads_create', function () {
    return view('leads_create');
});

route::post('/login',[LoginController::class,'store'])->name('Login')->middleware('guest');
route::get('/logout',[LoginController::class,'logout'])->name('logout');