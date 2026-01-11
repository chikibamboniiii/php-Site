<?php
// Имитация изображений
$images = [];
for ($i = 1; $i <= 12; $i++) {
    $images[] = [
        'id' => $i,
        'src' => 'https://picsum.photos/400/300?random=' . $i,
        'title' => 'Манипулятор ' . $i,
    ];
}

$content = '
    <h1 class="text-4xl font-bold mb-8">Галерея</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
';

foreach ($images as $image) {
    $content .= '
        <div class="card image-full hover:scale-105 transition-transform duration-300">
            <figure>
                <img src="' . $image['src'] . '" alt="' . $image['title'] . '" />
            </figure>
            <div class="card-body justify-end">
                <h2 class="card-title">' . $image['title'] . '</h2>
            </div>
        </div>
    ';
}

$content .= '</div>';

include 'layouts/base.php';

