<x-app-layout>
    <x-slot name="header">
        <h1>Нарушений нет</h1>
    </x-slot>

    <div>
        <a href="{{ route('reports.index') }}">К списку заявлений</a>

        <h2>Создание заявления</h2>

        <form class="report-form" method="POST" action="{{ route('reports.store') }}">
            @csrf

            <p>
                <label for="number">Номер автомобиля</label><br>
                <input type="text" id="number" name="number" placeholder="Введите номер">
            </p>

            <p>
                <label for="description">Описание нарушения</label><br>
                <textarea id="description" name="description" rows="5" placeholder="Опишите нарушение"></textarea>
            </p>

            <button type="submit">Создать</button>
        </form>
    </div>

    <footer>2026</footer>
</x-app-layout>