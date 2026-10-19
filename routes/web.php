<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;

Route::get('/', fn() => redirect ('/login'));

Route::get('/register', fn() => view('auth.register'));
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', fn() => view ('auth.login'));
Route::post('/login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout'])
    ->middleware('auth');

Route::middleware('auth')->group(function (){
    Route::get('/siswa', [SiswaController::class, 'index']);

    Route::get('/siswa/create', [SiswaController::class, 'create']);
    Route::post('/siswa',[SiswaController::class,'store']);

    Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit']);
    Route::put('/siswa/{siswa}', [SiswaController::class, 'update']);

    Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy']);
});

