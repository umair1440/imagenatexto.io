<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\LoginController;






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



/*


|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__ . '/admin.php';
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('contacto', [FrontendController::class, 'contacts'])->name('contact-us');
Route::get('terminos-y-condiciones', [FrontendController::class, 'terms'])->name('terms-and-conditions');
Route::get('politica-de-privacidad', [FrontendController::class, 'policy'])->name('privacy-policy');

Route::post('contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('blog', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('blog/{slug}', [FrontendController::class, 'blog'])->name(('blog.single'));
Route::post('humanize_request', [AjaxController::class, 'rephrase'])->name('rephrase');


// Route::group(['prefix' => 'admin'], function () {
//     Route::get('login/', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
//     Route::post('login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
// });

Route::get('sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'), ['Content-Type' => 'application/xml']);
});
