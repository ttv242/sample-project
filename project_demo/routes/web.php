<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/danh-muc', [PagesController::class, 'catelory'])->name('catelory');
Route::get('/gioi-thieu', [PagesController::class, 'about'])->name('about');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/lien-he', [PagesController::class, 'contact'])->name('contact');
Route::get('/dang-nhap', [PagesController::class, 'login'])->name('login');
Route::get('/dang-ky', [PagesController::class, 'register'])->name('register');

