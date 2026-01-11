<?php
// Имитация данных
$items = [];
for ($i = 1; $i <= 30; $i++) {
    $items[] = [
        'id' => $i,
        'name' => 'Манипулятор ' . $i,
        'description' => 'Грузоподъемность: 10 тонн. Длина стрелы: 20м.',
        'price' => rand(100, 300) * 10,
    ];
}

// Пагинация
$perPage = 6;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$totalPages = ceil(count($items) / $perPage);
$offset = ($page - 1) * $perPage;
$itemsPage = array_slice($items, $offset, $perPage);

$content = '
    <h1 class="text-4xl font-bold mb-8">Каталог манипуляторов</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
';

foreach ($itemsPage as $item) {
    $content .= '
        <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <div class="card-body">
                <h2 class="card-title">' . $item['name'] . '</h2>
                <p>' . $item['description'] . '</p>
                <div class="card-actions justify-between items-center mt-4">
                    <span class="text-2xl font-bold">' . $item['price'] . ' BYN/сутки</span>
                    <button class="btn btn-primary" onclick="openModal(' . $item['id'] . ')">Заказать</button>
                </div>
            </div>
        </div>
    ';
}

$content .= '</div>';

// Постраничная навигация
$content .= '<div class="join flex justify-center mt-8">';
for ($i = 1; $i <= $totalPages; $i++) {
    $active = $i == $page ? 'btn-active' : '';
    $content .= '<a href="?page=' . $i . '" class="join-item btn ' . $active . '">' . $i . '</a>';
}
$content .= '</div>';

// Модальное окно для заказа
$content .= '
    <dialog id="orderModal" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Заказ манипулятора</h3>
            <p class="py-4" id="modalContent">Заполните форму для заказа</p>
            <form method="dialog">
                <button class="btn">Закрыть</button>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <script>
        function openModal(id) {
            document.getElementById("modalContent").innerHTML = `Заказ манипулятора #${id}`;
            document.getElementById("orderModal").showModal();
        }
    </script>
';

include 'layouts/base.php';
