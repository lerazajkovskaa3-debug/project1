<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заявлений</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Нарушений нет</h1>
    </header>
    <main>
        <a href="{{ route('reports.index') }}">К списку заявлений</a>

        <h2>Создание заявления</h2>

        <form>
            <p>
                <label for="number">Номер автомобиля</label><br>
                <input type="text" id="number" name="number" placeholder="Введите номер">
            </p>

            <p>
                <label for="description">Описание нарушения</label><br>
                <textarea id="description" name="description" rows="5" placeholder="Опишите нарушение"></textarea>
            </p>

            <button type="button">Создать</button>
        </form>
    </main>
    <footer>2026</footer>
</body>
</html>