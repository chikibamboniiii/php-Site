<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('{url}', [Controllers\MainController::class, 'getIndex']);

// Главные страницы
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Стандартные маршруты Laravel (оставляем на всякий случай)
Route::get('/welcome', function () {
    return view('welcome');
});
