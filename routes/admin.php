<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Auth;


Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('admin/login', [AuthenticatedSessionController::class, 'store']);
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});


Route::group(['name' => 'adminRoutes'], function () {
    Route::get('admin/dashboard', [ToolController::class, 'index'])->name('dashboard');
    /* tool */
    Route::controller(ToolController::class)->name('tool.')->prefix('admin/dashboard')->group(function () {
        Route::get('add-tool', 'create')->name('add');
        Route::post('store-tool', 'store')->name('store');
        Route::get('add-settings', 'settings')->name('settings');
        Route::get('add-blogs', 'blogs')->name('blogs');
        Route::get('tools-list', 'tool_list')->name('toollist');
        Route::get('tool-edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}',  'update')->name('update');
        Route::post('destroy/{id}',  'destroy')->name('destroy');
    });

    Route::controller(BlogController::class)->name('blog.')->prefix('admin/dashboard')->group(function () {
        Route::get('/blog-list', 'index')->name('list');
        Route::post('/blog-store', 'store')->name('store');
        Route::post('/blog-destroy/{id}', 'destroy')->name('destroy');
    });

    Route::controller(ContactController::class)->name('contact.')->prefix('admin/dashboard')->group(function () {
        Route::get('/contact-list', 'index')->name('list');
        // Route::post('/blog-store', 'store')->name('store');
        // Route::post('/blog-destroy/{id}', 'destroy')->name('destroy');
    });


    Route::controller(SettingController::class)->group(function () {
        Route::post('store', 'store')->name('update-settings');
    });

    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('home');
    })->name('logout');
})->middleware(AdminAuth::class);
