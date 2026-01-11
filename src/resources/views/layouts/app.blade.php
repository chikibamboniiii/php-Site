<!DOCTYPE html>
<html lang="ru" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Аренда манипулятора в Минске')</title>

    <!-- Tailwind CSS + DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Hover эффекты */
        .hover-scale:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .hover-shadow:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.3s ease;
        }

        /* Плавные переходы для темы */
        * {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Анимация для модального окна */
        .modal-box {
            animation: modalSlideIn 0.3s ease;
        }

        @keyframes modalSlideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

<!-- Header с навигацией -->
@include('components.header')

<!-- Основной контент -->
<main class="flex-grow">
    @yield('content')
</main>

<!-- Footer -->
@include('components.footer')

<!-- Модальное окно обратной связи -->
@include('components.contact-modal')

<script>
    // Переключение темы
    function toggleTheme() {
        const html = document.documentElement;
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        html.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
    }

    // Загрузка сохранённой темы
    document.addEventListener('DOMContentLoaded', function() {
        const savedTheme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', savedTheme);
    });

    // Открытие модального окна
    function openContactModal() {
        document.getElementById('contact-modal').checked = true;
    }
</script>

@stack('scripts')
</body>
</html>
