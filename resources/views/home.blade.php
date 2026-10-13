<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Логотип">
        </div>

        <nav>
            <a href="{{ route('home') }}">Главная</a>
            <a href="{{ route('array') }}">Массивы</a>
        </nav>
    </header>

    <main>
        <h1>Добро пожаловать!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><br>
        <p>Sunt tempora repellat nam rem. Illum, eos voluptate? Veritatis dolorem veniam rem dicta temporibus ut neque tempore dolores amet laboriosam? Facere, eius.</p><br>
        <img src="{{ Vite::asset('resources/images/banner.jpg') }}" alt="Баннер">
    </main>

    <footer>
        <p>@ Зайковская Валерия Владимировна 2026</p>
    </footer>
</body>
</html>