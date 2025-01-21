<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\textController;

Route::get('/', [textController::class,'homePage'])-> name('welcome');
Route ::get('/about-us',[textController::class,'aboutPage'] ) -> name ('about');
Route :: get('/contact-us',[textController::class,'contactPage'])-> name('contact');


Route::get('/create',[textController::class,'create'])-> name('create.user');
Route::post('/save',[textController::class,'save'])-> name('save.user');

Route::get('/edit/{userId}',[textController::class,'edit'])-> name('edit.user');
Route::get('/update',[textController::class,'update'])-> name('update.user');