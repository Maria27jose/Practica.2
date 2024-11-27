<?php
use App\Http\Controllers\users;
use Illuminate\Support\Facades\Route;

Route::get('/',[users::class,'index']) ->name('index');
# primero va el path, luego controlador,metodo y el nombre--}}
Route::get('/create', [users::class, 'create'])->name('create');
Route::post('/store',[users::class,'store'] )->name('store');