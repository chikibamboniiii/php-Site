<?php
// Включение отладки ошибок (для разработки)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Определение базового пути
define('BASE_PATH', __DIR__);

// Загрузка классов и настроек (если будут)
// require_once BASE_PATH . '/config/config.php';

// Простой роутинг
$request = $_SERVER['REQUEST_URI'];
$request = strtok($request, '?'); // Игнорируем GET-параметры

// Убираем базовый путь, если проект лежит в подпапке
$base = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
if ($base != '/') {
    $request = substr($request, strlen($base));
}

$routes = [
        '/' => 'home.php',
        '/about' => 'about.php',
        '/catalog' => 'catalog.php',
        '/contact' => 'contact.php',
        '/gallery' => 'gallery.php',
];

if (array_key_exists($request, $routes)) {
    require_once BASE_PATH . '/views/' . $routes[$request];
} else {
    // 404
    header("HTTP/1.0 404 Not Found");
    require_once BASE_PATH . '/views/404.php';
}


// ... (предыдущий код)

// Обработка POST запроса на отправку формы
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $request === '/submit_contact') {
    // Обработка данных формы
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    // Валидация (можно вынести в отдельную функцию)
    $errors = [];
    if (empty($name)) $errors[] = 'Имя обязательно';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Некорректный email';
    if (empty($phone)) $errors[] = 'Телефон обязателен';
    if (empty($message)) $errors[] = 'Сообщение обязательно';

    if (empty($errors)) {
        // Сохранение данных, отправка email и т.д.
        // Например, можно сохранить в файл или базу данных
        // file_put_contents('contacts.txt', "$name, $email, $phone, $message\n", FILE_APPEND);

        // Редирект на страницу благодарности или обратно с сообщением об успехе
        // Для простоты выведем сообщение
        echo "Спасибо за ваше сообщение! Мы свяжемся с вами в ближайшее время.";
        exit;
    } else {
        // Вывод ошибок
        echo implode('<br>', $errors);
        exit;
    }
}

// ... (далее роутинг как было)