<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\textController;

Route::get('/', [textController::class,'homePage'])-> name('welcome');
Route ::get('/about-us',[textController::class,'aboutPage'] ) -> name ('about');
Route :: get('/contact-us',[textController::class,'contactPage'])-> name('contact');


Route::get('/create',[textController::class,'create'])-> name('create.user');
Route::post('/save',[textController::class,'save'])-> name('save.user');
Route::get('/edit/{id}', [textController::class, 'edit'])->name('edit.user');
Route::post('/update/{id}', [textController::class, 'update'])->name('update.user');
Route::get('/delete/{id}', [textController::class, 'delete'])->name('delete.user');