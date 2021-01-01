<?php
use  App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;



Route::get('/index', [ContactController::class , 'index'])->name('index');
Route::get('contact' ,[ContactController::class, 'contact']);
Route::post('store' , [ContactController::class, 'store']);
Route::get('edit/{id}' , [ContactController::class, 'edit'])->name('edit');
Route::post('update/{id}' , [ContactController::class, 'update'])->name('update');
Route::get('delete/{id}' , [ContactController::class, 'destroy'])->name('delete');


