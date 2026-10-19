<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <header>
        <h1>Наш магазин</h1>

        <nav>
            <a href="{{ route('home') }}">Главная</a>
            <a href="{{ route('array') }}">Массивы</a>
        </nav>
    </header>

    <main>
        <h1>Каталог товаров</h1>
        <p>
            <a href="{{ route('array.shuffle') }}">Перемешать массив</a>
            <a href="{{ route('array.sort') }}">Сортировать по цене</a>
            <a href="{{ route('array.filter') }}">Товары дороже 1000</a>
        </p>
        <div class="products">
            @foreach ($array as $item)
            <div class="product">
                <img src="{{ Vite::asset('resources/images/' .$item['path']) }}" alt="{{ $item['title'] }}">
                <h3>{{$item['title']}}</h3>
                <p>{{$item['price']}} &#8381</p>
            </div>   
            @endforeach
        </div>
    </main>

    <footer>
        <p>@ Зайковская Валерия Владимировна 2026</p>
    </footer>
</body>
</html>