<!DOCTYPE html>
<html lang="ru" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аренда манипулятора в Минске</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Инициализация темы из localStorage или установка светлой по умолчанию
        document.addEventListener('DOMContentLoaded', function() {
            const theme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', theme);
        });
    </script>
</head>
<body>
<div class="min-h-screen flex flex-col">
    <header>
        <!-- Навигация -->
        <nav class="navbar bg-base-100 shadow-lg">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/catalog">Каталог</a></li>
                        <li><a href="/gallery">Галерея</a></li>
                        <li><a href="/about">О нас</a></li>
                        <li><a href="/contact">Контакты</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl" href="/">Манипуляторы Минск</a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/catalog">Каталог</а></li>
                    <li><a href="/gallery">Галерея</a></li>
                    <li><a href="/about">О нас</a></li>
                    <li><a href="/contact">Контакты</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <button class="btn btn-ghost" id="theme-toggle">
                    <svg id="theme-icon-light" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg id="theme-icon-dark" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
            </div>
        </nav>
    </header>

    <main class="flex-grow container mx-auto px-4 py-8">
        <?php echo $content; ?>
    </main>

    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
        <nav class="grid grid-flow-col gap-4">
            <a href="/about" class="link link-hover">О нас</a>
            <a href="/contact" class="link link-hover">Контакты</a>
            <a href="/catalog" class="link link-hover">Каталог</a>
            <a href="/gallery" class="link link-hover">Галерея</a>
        </nav>
        <div>
            <p>© 2024 Аренда манипулятора в Минске. Все права защищены.</p>
        </div>
    </footer>
</div>

<script>
    // Переключение темы
    const themeToggle = document.getElementById('theme-toggle');
    const themeIconLight = document.getElementById('theme-icon-light');
    const themeIconDark = document.getElementById('theme-icon-dark');

    themeToggle.addEventListener('click', function() {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);

        // Переключение иконок
        if (newTheme === 'light') {
            themeIconLight.classList.remove('hidden');
            themeIconDark.classList.add('hidden');
        } else {
            themeIconLight.classList.add('hidden');
            themeIconDark.classList.remove('hidden');
        }
    });

    // При загрузке страницы устанавливаем правильную иконку
    document.addEventListener('DOMContentLoaded', function() {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        if (currentTheme === 'light') {
            themeIconLight.classList.remove('hidden');
            themeIconDark.classList.add('hidden');
        } else {
            themeIconLight.classList.add('hidden');
            themeIconDark.classList.remove('hidden');
        }
    });
</script>
</body>
</html>
