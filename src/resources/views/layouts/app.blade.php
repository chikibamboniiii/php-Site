<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Мой сайт на Laravel')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Arial', sans-serif; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            min-height: 100vh;
        }
        .header {
            background: rgba(0,0,0,0.2);
            padding: 1rem 0;
            backdrop-filter: blur(10px);
        }
        .nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 2rem;
            padding: 0 2rem;
        }
        .nav a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .nav a:hover {
            background: rgba(255,255,255,0.1);
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        .content {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }
        .footer {
            text-align: center;
            padding: 2rem;
            margin-top: 2rem;
            background: rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="{{ url('/') }}">Главная</a>
            <a href="{{ url('/about') }}">О нас</a>
            <a href="{{ url('/contact') }}">Контакты</a>
        </nav>
    </header>

    <main class="container">
        <div class="content">
            @yield('content')
        </div>
    </main>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} Мой сайт на Laravel. Все права защищены.</p>
    </footer>
</body>
</html>
