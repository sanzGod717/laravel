<?php
use App\Http\Controllers\Api;
use App\Http\Controllers\Crud;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Api::class,'index']);
Route::get('/waifu', [Api::class,'waifu']);
Route::get('/count/{qnt}', [Api::class,'getNum']);


Route::get('/crud', [Crud::class,'index']);
Route::get('/list', [Crud::class,'all']);
Route::post('/create', [Crud::class,'create'])->name('create');
Route::get('/store', [Crud::class,'store']);
Route::get('/show', [Crud::class,'show']);
Route::get('/edit', [Crud::class,'edit']);
Route::post('/update', [Crud::class,'update'])->name('update');
Route::get('/delete', [Crud::class,'destroy']);

Route::get('/api', [ApiController::class,'index']);