<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Отображение страницы "О нас"
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $team = [
            [
                'name' => 'Иван Петров',
                'position' => 'Генеральный директор',
                'image' => 'https://ui-avatars.com/api/?name=Ivan+Petrov&size=200',
            ],
            [
                'name' => 'Александр Сидоров',
                'position' => 'Главный инженер',
                'image' => 'https://ui-avatars.com/api/?name=Alex+Sidorov&size=200',
            ],
            [
                'name' => 'Дмитрий Козлов',
                'position' => 'Руководитель отдела продаж',
                'image' => 'https://ui-avatars.com/api/?name=Dmitry+Kozlov&size=200',
            ],
        ];

        return view('pages.about', compact('team'));
    }
}
