<x-app-layout>
    <x-slot name="header">
        <h2>Нарушений нет — список заявлений</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p>
                <a href="{{ route('reports.create') }}">
                    Создать заявление
                </a>
            </p>

            <div>
                <span>Сортировка по дате создания: </span>
                <a href="{{ route('reports.index', ['sort' => 'desc', 'status' => $status]) }}">
                    сначала новые
                </a>
                <a href="{{ route('reports.index', ['sort' => 'asc', 'status' => $status]) }}">
                    сначала старые
                </a>
            </div>

            <div>
                <p>Фильтрация по статусу заявки</p>

                <ul>
                    @foreach ($statuses as $statusItem)
                        <li>
                            <a href="{{ route('reports.index', ['sort' => $sort, 'status' => $statusItem->id]) }}">
                                {{ $statusItem->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="reports">
                @foreach ($reports as $report)
                    <div class="report">
                        <p>Дата создания: {{ $report->created_at }}</p>
                        <h3>Номер автомобиля: {{ $report->number }}</h3>
                        <p>Описание нарушений: {{ $report->description }}</p>
                        <p>{{ $report->status->name }}</p>

                        <p>
                            <a href="{{ route('reports.edit', $report->id) }}">
                                Редактировать
                            </a>
                        </p>

                        <form method="POST" action="{{ route('reports.destroy', $report->id) }}">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Удалить">
                        </form>
                    </div>
                @endforeach
            </div>

            {{ $reports->appends(request()->query())->links() }}

            <footer>
                <p>2026</p>
            </footer>
        </div>
    </div>
</x-app-layout>