<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/admin.php';
Route::get('/', [FrontendController::class, 'index'])->name('home');
