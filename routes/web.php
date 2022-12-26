<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/{username}', [HomeController::class,'show'])->name('home.show');
Route::get('/blogs/show/{slug}', [HomeController::class,'blog_show'])->name('home.blog.show');
Route::get('/blogs/index', [HomeController::class,'blog_index'])->name('home.blog.index');

Route::prefix('moe')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard.index');
    Route::get('/profile', [DashboardController::class,'profile'])->name('dashboard.profile');
    Route::get('/bulk-create', [UserController::class,'bulk_create'])->name('users.bulk_create');
    Route::post('/bulk-create-store', [UserController::class,'bulk_create_store'])->name('users.bulk_create_store');

    Route::resource('users', UserController::class);
    Route::resource('infos', InfoController::class, ['as' => 'users']);
    Route::resource('skills', SkillController::class);
    Route::resource('socials', SocialController::class);
    Route::resource('blogs', BlogController::class);
});

require __DIR__.'/auth.php';
