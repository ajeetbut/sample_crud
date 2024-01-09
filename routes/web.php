<?php

use App\Http\Controllers\starController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;



Route::get('/',[starController::class, 'showstars'])->name('home');

Route::get('/star/{id}',[starController::class, 'singlestar'])->name('view.star');

Route::post('/add',[starController::class, 'addstar'])->name('addstar');

Route::put('/update/{id}',[starController::class, 'updatestar'])->name('update.star');
Route::get('/updatepage/{id}',[starController::class, 'updatepage'])->name('update.page');

Route::get('/delete/{id}',[starController::class, 'deletestar'])->name('delete.star');

Route::view('newuser','/addstar');

