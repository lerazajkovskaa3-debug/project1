<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявления</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Нарушений нет</h1>
    </header>

    <main>
        <h2>Список заявлений</h2>

        <p>
            <a href="{{ route('reports.create')}}">Создать заявление</a>
        </p>
        <div class="reports">
            @foreach ($reports as $report)
            <div class="report">
                <p>Дата создания: {{ $report->created_at }}</p>
                <h3>Номер автомобиля: {{ $report->number }}</h3>
                <p>Описание нарушений: {{ $report->description }}</p>
            <form method="POST" action = "{{route('reports.destroy', $report->id)}}">
                @method('delete')
                @csrf
                <input type="submit" value="Удалить">
            </form>
            </div>
            @endforeach
        </div>
    </main>
    <footer>
        <p>2026</p>
    </footer>
</body>
</html>