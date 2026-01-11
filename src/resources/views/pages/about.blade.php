@extends('layouts.app')

@section('title', 'О компании - Аренда манипулятора в Минске')

@section('content')

    <!-- Hero -->
    <div class="hero min-h-[50vh] bg-base-200">
        <div class="hero-content text-center">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold mb-4">О нашей компании</h1>
                <p class="text-xl">Более 14 лет на рынке услуг аренды спецтехники в Беларуси</p>
            </div>
        </div>
    </div>

    <!-- История компании -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold mb-6">Наша история</h2>
                    <div class="space-y-4 text-lg text-base-content/80">
                        <p>
                            Компания "Манипулятор Минск" была основана в 2010 году с целью предоставления
                            качественных услуг по аренде спецтехники в Минске и Минской области.
                        </p>
                        <p>
                            За годы работы мы выполнили более 5000 проектов, от небольших частных заказов
                            до крупных строительных объектов. Наша репутация построена на надёжности,
                            профессионализме и индивидуальном подходе к каждому клиенту.
                        </p>
                        <p>
                            Сегодня в нашем парке 25 единиц современной спецтехники, а команда состоит
                            из опытных операторов и инженеров с многолетним стажем работы.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800"
                         alt="О компании"
                         class="rounded-lg shadow-2xl" />
                </div>
            </div>
        </div>
    </section>

    <!-- Наши ценности -->
    <section class="py-20 bg-base-200">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Наши ценности</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card bg-base-100 shadow-xl hover-shadow hover-scale">
                    <div class="card-body items-center text-center">
                        <div class="text-5xl mb-4">🎯</div>
                        <h3 class="card-title">Профессионализм</h3>
                        <p>Высокая квалификация специалистов и постоянное обучение</p>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover-shadow hover-scale">
                    <div class="card-body items-center text-center">
                        <div class="text-5xl mb-4">🤝</div>
                        <h3 class="card-title">Надёжность</h3>
                        <p>Соблюдение сроков и гарантия качества выполненных работ</p>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover-shadow hover-scale">
                    <div class="card-body items-center text-center">
                        <div class="text-5xl mb-4">💡</div>
                        <h3 class="card-title">Инновации</h3>
                        <p>Современное оборудование и передовые технологии</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Команда -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Наша команда</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($team as $member)
                    <div class="card bg-base-100 shadow-xl hover-shadow hover-scale">
                        <figure class="px-10 pt-10">
                            <img src="{{ $member['image'] }}"
                                 alt="{{ $member['name'] }}"
                                 class="rounded-full w-40 h-40" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <h3 class="card-title">{{ $member['name'] }}</h3>
                            <p class="text-primary">{{ $member['position'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Достижения -->
    <section class="py-20 bg-primary text-primary-content">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Наши достижения</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-5xl font-bold mb-2">14</div>
                    <p class="text-lg">Лет на рынке</p>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold mb-2">5000+</div>
                    <p class="text-lg">Проектов</p>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold mb-2">3200+</div>
                    <p class="text-lg">Клиентов</p>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold mb-2">25</div>
                    <p class="text-lg">Единиц техники</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Почему мы -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Почему выбирают нас</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @php
                    $advantages = [
                        ['icon' => '✓', 'title' => 'Собственный парк техники', 'desc' => 'Не зависим от субподрядчиков'],
                        ['icon' => '✓', 'title' => 'Опытные операторы', 'desc' => 'Стаж работы от 10 лет'],
                        ['icon' => '✓', 'title' => 'Круглосуточная работа', 'desc' => 'Доступны 24/7 без выходных'],
                        ['icon' => '✓', 'title' => 'Прозрачные цены', 'desc' => 'Без скрытых платежей'],
                        ['icon' => '✓', 'title' => 'Полное страхование', 'desc' => 'Все работы застрахованы'],
                        ['icon' => '✓', 'title' => 'Гарантия качества', 'desc' => 'Гарантируем выполнение в срок'],
                    ];
                @endphp

                @foreach($advantages as $advantage)
                    <div class="flex items-start gap-4 p-4 bg-base-100 rounded-lg shadow hover-shadow hover-scale">
                        <div class="text-4xl text-success">{{ $advantage['icon'] }}</div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">{{ $advantage['title'] }}</h3>
                            <p class="text-base-content/70">{{ $advantage['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-base-200">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Готовы работать с профессионалами?</h2>
            <p class="text-xl mb-8">Свяжитесь с нами прямо сейчас</p>
            <button onclick="openContactModal()" class="btn btn-primary btn-lg hover-scale">
                Заказать услугу
            </button>
        </div>
    </section>

@endsection
