<?php
use App\Http\Controllers\WaifuController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\BulletController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WaifuController::class,'index']);
Route::get('/waifu', [WaifuController::class,'waifu']);
Route::get('/count/{qnt}', [WaifuController::class,'getNum']);


Route::get('/crud', [CrudController::class,'index']);
Route::get('/list', [CrudController::class,'all']);
Route::post('/create', [CrudController::class,'create'])->name('create');
Route::get('/store', [CrudController::class,'store']);
Route::get('/show', [CrudController::class,'show']);
Route::get('/edit', [CrudController::class,'edit']);
Route::post('/update', [CrudController::class,'update'])->name('update');
Route::get('/delete', [CrudController::class,'destroy']);

Route::get('/api', [ApiController::class,'index']);

Route::get('/bullet', [BulletController::class,'index']);