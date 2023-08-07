<?php
use App\Http\Controllers\Waifu;
use App\Http\Controllers\Crud;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\BulletController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Waifu::class,'index']);
Route::get('/waifu', [Waifu::class,'waifu']);
Route::get('/count/{qnt}', [Waifu::class,'getNum']);


Route::get('/crud', [Crud::class,'index']);
Route::get('/list', [Crud::class,'all']);
Route::post('/create', [Crud::class,'create'])->name('create');
Route::get('/store', [Crud::class,'store']);
Route::get('/show', [Crud::class,'show']);
Route::get('/edit', [Crud::class,'edit']);
Route::post('/update', [Crud::class,'update'])->name('update');
Route::get('/delete', [Crud::class,'destroy']);

Route::get('/api', [ApiController::class,'index']);

Route::get('/bullet', [BulletController::class,'index']);