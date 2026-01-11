@extends('layouts.app')

@section('title', 'Галерея работ - Аренда манипулятора')

@section('content')

    <!-- Заголовок -->
    <div class="hero min-h-[40vh] bg-base-200">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Галерея работ</h1>
                <p class="py-6">Примеры наших проектов и выполненных заказов</p>
            </div>
        </div>
    </div>

    <!-- Фильтры -->
    <section class="py-10 bg-base-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-2">
                <button class="btn btn-primary" onclick="filterGallery('all')">Все</button>
                <button class="btn btn-outline btn-primary" onclick="filterGallery('manipulator')">Манипулятор</button>
                <button class="btn btn-outline btn-primary" onclick="filterGallery('construction')">Стройка</button>
                <button class="btn btn-outline btn-primary" onclick="filterGallery('cargo')">Грузы</button>
            </div>
        </div>
    </section>

    <!-- Галерея -->
    <section class="py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery-grid">
                @php
                    $images = [
                        ['url' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600', 'category' => 'manipulator', 'title' => 'Работа манипулятора'],
                        ['url' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600', 'category' => 'construction', 'title' => 'Строительный объект'],
                        ['url' => 'https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=600', 'category' => 'cargo', 'title' => 'Перевозка грузов'],
                        ['url' => 'https://images.unsplash.com/photo-1597416578227-3e0537625d19?w=600', 'category' => 'manipulator', 'title' => 'Погрузка материалов'],
                        ['url' => 'https://images.unsplash.com/photo-1590856029826-c7a73142bbf1?w=600', 'category' => 'construction', 'title' => 'Высотные работы'],
                        ['url' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600', 'category' => 'cargo', 'title' => 'Логистика'],
                        ['url' => 'https://images.unsplash.com/photo-1572981234928-1b61b5f4fc4d?w=600', 'category' => 'manipulator', 'title' => 'Специальная техника'],
                        ['url' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=600', 'category' => 'construction', 'title' => 'Монтажные работы'],
                        ['url' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=600', 'category' => 'cargo', 'title' => 'Доставка товаров'],
                    ];
                @endphp

                @foreach($images as $index => $image)
                    <div class="gallery-item hover-scale" data-category="{{ $image['category'] }}">
                        <div class="card bg-base-100 shadow-xl hover-shadow cursor-pointer" onclick="openImageModal({{ $index }})">
                            <figure>
                                <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}" class="w-full h-64 object-cover" />
                            </figure>
                            <div class="card-body">
                                <h3 class="card-title text-lg">{{ $image['title'] }}</h3>
                                <div class="badge badge-primary">{{ ucfirst($image['category']) }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Пагинация -->
    <section class="py-10">
        <div class="container mx-auto px-4">
            <div class="join flex justify-center">
                <button class="join-item btn">«</button>
                <button class="join-item btn btn-active">1</button>
                <button class="join-item btn">2</button>
                <button class="join-item btn">3</button>
                <button class="join-item btn">4</button>
                <button class="join-item btn">»</button>
            </div>
        </div>
    </section>

    <!-- Модальное окно для просмотра изображения -->
    <input type="checkbox" id="image-modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box max-w-4xl">
            <label for="image-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
            <img id="modal-image" src="" alt="" class="w-full rounded-lg" />
            <h3 id="modal-title" class="text-xl font-bold mt-4"></h3>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        const images = @json($images);

        // Фильтрация галереи
        function filterGallery(category) {
            const items = document.querySelectorAll('.gallery-item');
            const buttons = document.querySelectorAll('button[onclick^="filterGallery"]');

            // Обновляем кнопки
            buttons.forEach(btn => {
                btn.classList.remove('btn-primary');
                btn.classList.add('btn-outline', 'btn-primary');
            });
            event.target.classList.remove('btn-outline');
            event.target.classList.add('btn-primary');

            // Фильтруем элементы
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        }

        // Открытие модального окна с изображением
        function openImageModal(index) {
            const modal = document.getElementById('image-modal');
            const modalImage = document.getElementById('modal-image');
            const modalTitle = document.getElementById('modal-title');

            modalImage.src = images[index].url;
            modalTitle.textContent = images[index].title;
            modal.checked = true;
        }

        // Плавное появление элементов
        document.addEventListener('DOMContentLoaded', function() {
            const items = document.querySelectorAll('.gallery-item');
            items.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = 'all 0.3s ease';

                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
@endpush
