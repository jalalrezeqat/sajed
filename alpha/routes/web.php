<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->group(function(){
        //Login Route
        Route::get('/login', [App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('/login', [App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'store'])->name('adminlogin');
        
    });
    
        Route::middleware('admin')->group(function(){
        Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');
        //admin connectu
        Route::get('/Connectus', [App\Http\Controllers\Admin\ConnectusController::class, 'index'])->name('Connectus');
        Route::get('/Connectus/{Connectus_id}/delete', [App\Http\Controllers\Admin\ConnectusController::class, 'destroy'])->name('Connectus.destroy');
        
        //admin about

        Route::get('/about', [App\Http\Controllers\Admin\AboutController::class, 'index'])->name('about');
        Route::get('/about/{about_id}/delete', [App\Http\Controllers\Admin\AboutController::class, 'destroy'])->name('about.destroy');
        Route::get('/about/add', [App\Http\Controllers\Admin\AboutController::class, 'addmission'])->name('about.add');
        Route::post('/about/add', [App\Http\Controllers\Admin\AboutController::class, 'store']);
        Route::get('/about/{about}/edit', [App\Http\Controllers\Admin\AboutController::class, 'edit'])->name('about.edit');
        Route::put('/about/update/{id}', [App\Http\Controllers\Admin\AboutController::class, 'update'])->name('about.update');
        Route::get('/about/{about}/editvistion', [App\Http\Controllers\Admin\AboutController::class, 'editvistion'])->name('about.editvistion');
        Route::put('/about/updatevistion/{id}', [App\Http\Controllers\Admin\AboutController::class, 'updatevistion'])->name('about.updatevistion');







        });
        Route::post('/logout', [App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');

        
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/courses', [App\Http\Controllers\coursesController::class, 'index'])->name('courses');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/Connectus', [App\Http\Controllers\ConnectusController::class, 'index'])->name('Connectus');
Route::post('/Connectus', [App\Http\Controllers\ConnectusController::class, 'store'])->name('Connectus');




require __DIR__.'/auth.php';
