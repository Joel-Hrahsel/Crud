<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account', [AccountController::class, 'index'])->name('account.index');
Route::get('/church', [AccountController::class, 'index'])->name('church.index');

Route::get('/account/create', [AccountController::class, 'create'])->name('account.create');
Route::get('/church/create', [AccountController::class, 'create'])->name('church.create');

//-----------------------
Route::post('/account', [AccountController::class, 'list'])->name('account.list');
Route::post('/church', [AccountController::class, 'list'])->name('church.list');

//this will be get, because it only edit page
Route::get('/account/{account}/edit',[AccountController::class, 'edit'])->name('account.edit');

//This is to update data use put
Route::put('/account/{account}/update',[AccountController::class, 'update'])->name('account.update');

//route for delete
Route::delete('/account/{account}/destroy',[AccountController::class, 'destroy'])->name('account.destroy');
