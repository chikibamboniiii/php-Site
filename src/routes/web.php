<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Здесь регистрируются все маршруты веб-приложения.
| Маршруты загружаются RouteServiceProvider в группе "web".
|
*/

// Главная страница
Route::get('/', [HomeController::class, 'index'])->name('home');

// Услуги
Route::prefix('services')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/{slug}', [ServiceController::class, 'show'])->name('services.show');
});

// Галерея
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// О компании
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Цены
Route::get('/prices', function () {
    return view('pages.prices');
})->name('prices');

// FAQ
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

// Отзывы
Route::get('/reviews', function () {
    return view('pages.reviews');
})->name('reviews');

// Контактная форма
Route::post('/send-contact', [ContactController::class, 'send'])->name('contact.send');

// Дополнительные маршруты
Route::prefix('api')->group(function () {
    // API для получения услуг
    Route::get('/services', [ServiceController::class, 'apiIndex']);

    // API для получения изображений галереи
    Route::get('/gallery', [GalleryController::class, 'apiIndex']);
});
