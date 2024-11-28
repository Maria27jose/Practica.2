<?php
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;
# primero va el path, luego controlador,metodo y el nombre--}}

route::get('/products',[ProductController::class,'index'])->name('products.index');
route::get('/products/create',[ProductController::class,'create'])->name('products.create');
#esta ruta es tipo post porque es un formulario 
route::post('/products/store' ,[ProductController::class,'store'])->name('products.store');