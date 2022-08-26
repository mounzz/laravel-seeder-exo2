<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompagniesEdit;
use App\Http\Controllers\CompagniesController;


Route::get('/', [CompagniesController::class, 'home'])->name('home');
Route::post('/create', [CompagniesController::class, 'store']);
Route::get('/{id}', [CompagniesController::class, 'show']);
Route::delete('/{id}/delete', [CompagniesController::class, 'destroy']);
Route::post('/deleteAll', [CompagniesController::class, 'deleteAll']);


Route::put('/compagnieEdit/{id}/update',[CompagniesEdit::class, 'update']);
