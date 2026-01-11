<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Отображение страницы галереи
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // В реальном проекте данные из базы данных
        $images = [
            [
                'url' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600',
                'category' => 'manipulator',
                'title' => 'Работа манипулятора'
            ],
            [
                'url' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600',
                'category' => 'construction',
                'title' => 'Строительный объект'
            ],
            [
                'url' => 'https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=600',
                'category' => 'cargo',
                'title' => 'Перевозка грузов'
            ],
            [
                'url' => 'https://images.unsplash.com/photo-1597416578227-3e0537625d19?w=600',
                'category' => 'manipulator',
                'title' => 'Погрузка материалов'
            ],
            [
                'url' => 'https://images.unsplash.com/photo-1590856029826-c7a73142bbf1?w=600',
                'category' => 'construction',
                'title' => 'Высотные работы'
            ],
            [
                'url' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600',
                'category' => 'cargo',
                'title' => 'Логистика'
            ],
            [
                'url' => 'https://images.unsplash.com/photo-1572981234928-1b61b5f4fc4d?w=600',
                'category' => 'manipulator',
                'title' => 'Специальная техника'
            ],
            [
                'url' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=600',
                'category' => 'construction',
                'title' => 'Монтажные работы'
            ],
            [
                'url' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=600',
                'category' => 'cargo',
                'title' => 'Доставка товаров'
            ],
        ];

        return view('pages.gallery', compact('images'));
    }

    /**
     * API endpoint для получения изображений галереи
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiIndex(Request $request)
    {
        $category = $request->query('category');

        $images = [
            [
                'id' => 1,
                'url' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600',
                'category' => 'manipulator',
                'title' => 'Работа манипулятора'
            ],
            [
                'id' => 2,
                'url' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600',
                'category' => 'construction',
                'title' => 'Строительный объект'
            ],
            [
                'id' => 3,
                'url' => 'https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=600',
                'category' => 'cargo',
                'title' => 'Перевозка грузов'
            ],
        ];

        // Фильтрация по категории если указана
        if ($category) {
            $images = array_filter($images, function($image) use ($category) {
                return $image['category'] === $category;
            });
        }

        return response()->json([
            'success' => true,
            'data' => array_values($images)
        ]);
    }
}
