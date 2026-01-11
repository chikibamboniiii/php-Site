@extends('layouts.app')

@section('title', 'Услуги - Аренда манипулятора в Минске')

@section('content')

    <!-- Hero секция -->
    <div class="hero min-h-[50vh] bg-gradient-to-r from-primary to-secondary">
        <div class="hero-content text-center text-primary-content">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold mb-4">Наши услуги</h1>
                <p class="text-xl">Полный спектр услуг по аренде манипулятора и спецтехники в Минске</p>
            </div>
        </div>
    </div>

    <!-- Основные услуги -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                @php
                    $services = [
                        [
                            'id' => 1,
                            'icon' => '🏗️',
                            'title' => 'Аренда манипулятора',
                            'price' => 'от 80 BYN/час',
                            'description' => 'Современные манипуляторы с грузоподъёмностью до 10 тонн. Опытные операторы, работа по всей Минской области.',
                            'features' => [
                                'Грузоподъёмность до 10 тонн',
                                'Вылет стрелы до 25 метров',
                                'Работа в стесненных условиях',
                                'Круглосуточная доступность',
                            ],
                            'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600'
                        ],
                        [
                            'id' => 2,
                            'icon' => '🚛',
                            'title' => 'Перевозка грузов',
                            'price' => 'от 60 BYN/час',
                            'description' => 'Транспортировка грузов любого размера и веса по Минску и области. Надёжная доставка в срок.',
                            'features' => [
                                'Грузовики различной вместимости',
                                'Доставка по городу и области',
                                'Погрузка и разгрузка',
                                'Страхование груза',
                            ],
                            'image' => 'https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=600'
                        ],
                        [
                            'id' => 3,
                            'icon' => '🏢',
                            'title' => 'Строительные работы',
                            'price' => 'от 100 BYN/час',
                            'description' => 'Комплексные услуги на строительных объектах. Монтаж, демонтаж, подъём материалов.',
                            'features' => [
                                'Монтаж конструкций',
                                'Подъём материалов на высоту',
                                'Демонтажные работы',
                                'Работа с опытной бригадой',
                            ],
                            'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600'
                        ],
                        [
                            'id' => 4,
                            'icon' => '⚙️',
                            'title' => 'Аренда спецтехники',
                            'price' => 'от 70 BYN/час',
                            'description' => 'Широкий парк спецтехники для различных задач. Экскаваторы, погрузчики, краны.',
                            'features' => [
                                'Экскаваторы разных типов',
                                'Погрузчики фронтальные',
                                'Автокраны различной грузоподъёмности',
                                'Техническое обслуживание включено',
                            ],
                            'image' => 'https://images.unsplash.com/photo-1597416578227-3e0537625d19?w=600'
                        ],
                    ];
                @endphp

                @foreach($services as $service)
                    <div class="card lg:card-side bg-base-100 shadow-xl hover-shadow hover-scale">
                        <figure class="lg:w-1/3">
                            <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="w-full h-full object-cover" />
                        </figure>
                        <div class="card-body lg:w-2/3">
                            <div class="flex items-center gap-3">
                                <span class="text-5xl">{{ $service['icon'] }}</span>
                                <div>
                                    <h2 class="card-title text-2xl">{{ $service['title'] }}</h2>
                                    <p class="text-primary font-bold">{{ $service['price'] }}</p>
                                </div>
                            </div>

                            <p class="text-base-content/70">{{ $service['description'] }}</p>

                            <div class="mt-4">
                                <h4 class="font-semibold mb-2">Особенности:</h4>
                                <ul class="space-y-1">
                                    @foreach($service['features'] as $feature)
                                        <li class="flex items-center gap-2">
                                            <svg class="w-5 h-5 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span class="text-sm">{{ $feature }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="card-actions justify-end mt-4">
                                <button onclick="openContactModal()" class="btn btn-primary hover-scale">
                                    Заказать
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Дополнительные услуги -->
    <section class="py-20 bg-base-200">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Дополнительные услуги</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @php
                    $additionalServices = [
                        ['icon' => '📦', 'title' => 'Погрузо-разгрузочные работы', 'desc' => 'Профессиональная бригада грузчиков'],
                        ['icon' => '🔧', 'title' => 'Техническое обслуживание', 'desc' => 'Ремонт и обслуживание техники'],
                        ['icon' => '📋', 'title' => 'Консультации', 'desc' => 'Помощь в планировании работ'],
                        ['icon' => '🛡️', 'title' => 'Страхование', 'desc' => 'Полное страхование грузов'],
                        ['icon' => '📞', 'title' => 'Диспетчерская служба', 'desc' => 'Координация работ 24/7'],
                        ['icon' => '💼', 'title' => 'Корпоративным клиентам', 'desc' => 'Специальные условия и скидки'],
                    ];
                @endphp

                @foreach($additionalServices as $service)
                    <div class="card bg-base-100 shadow-lg hover-shadow hover-scale">
                        <div class="card-body items-center text-center">
                            <div class="text-5xl mb-3">{{ $service['icon'] }}</div>
                            <h3 class="card-title text-lg">{{ $service['title'] }}</h3>
                            <p class="text-sm text-base-content/70">{{ $service['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Процесс работы -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Как мы работаем</h2>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-20 h-20 bg-primary text-primary-content rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">
                        1
                    </div>
                    <h3 class="font-bold text-xl mb-2">Заявка</h3>
                    <p class="text-base-content/70">Оставьте заявку на сайте или позвоните нам</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-primary text-primary-content rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">
                        2
                    </div>
                    <h3 class="font-bold text-xl mb-2">Расчёт</h3>
                    <p class="text-base-content/70">Рассчитаем стоимость и согласуем детали</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-primary text-primary-content rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">
                        3
                    </div>
                    <h3 class="font-bold text-xl mb-2">Выполнение</h3>
                    <p class="text-base-content/70">Приедем в назначенное время и выполним работу</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-primary text-primary-content rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4">
                        4
                    </div>
                    <h3 class="font-bold text-xl mb-2">Оплата</h3>
                    <p class="text-base-content/70">Оплата после завершения работ</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA секция -->
    <section class="py-20 bg-primary text-primary-content">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Нужна консультация?</h2>
            <p class="text-xl mb-8">Позвоните нам или оставьте заявку, и мы перезвоним в течение 15 минут</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="tel:+375291234567" class="btn btn-neutral btn-lg hover-scale">
                    📞 +375 (29) 123-45-67
                </a>
                <button onclick="openContactModal()" class="btn btn-neutral btn-outline btn-lg hover-scale">
                    Заказать звонок
                </button>
            </div>
        </div>
    </section>

@endsection
