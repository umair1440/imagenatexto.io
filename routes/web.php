<?php

use App\Http\Controllers\OcrController;
use Illuminate\Support\Facades\Route;

Route::post('/upload', [OcrController::class, 'uploadFile']);
Route::get('/upload', [OcrController::class, 'uploadFile']);
Route::view('/', 'home');
