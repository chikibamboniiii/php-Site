<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Отображение главной страницы
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Здесь можно получить данные из базы данных
        // Например: последние новости, отзывы, статистику и т.д.

        $stats = [
            'projects' => '5000+',
            'clients' => '3200+',
            'experience' => '14',
            'vehicles' => '25',
        ];

        return view('pages.home', compact('stats'));
    }
}
