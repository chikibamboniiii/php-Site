@extends('layouts.app')

@section('title', 'Аренда манипулятора в Минске - Главная')

@section('content')

    <!-- Hero секция -->
    <div class="hero min-h-screen" style="background-image: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=1200');">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Аренда манипулятора в Минске</h1>
                <p class="mb-5">Профессиональные услуги по перевозке и погрузке грузов. Опыт работы более 10 лет.</p>
                <button onclick="openContactModal()" class="btn btn-primary btn-lg hover-scale">Заказать сейчас</button>
            </div>
        </div>
    </div>

    <!-- Преимущества -->
    <section class="py-20 bg-base-200">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Наши преимущества</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card bg-base-100 shadow-xl hover-shadow hover-scale">
                    <div class="card-body items-center text-center">
                        <div class="text-5xl mb-4">⏰</div>
                        <h3 class="card-title">24/7 доступность</h3>
                        <p>Работаем круглосуточно без выходных</p>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover-shadow hover-scale">
                    <div class="card-body items-center text-center">
                        <div class="text-5xl mb-4">💰</div>
                        <h3 class="card-title">Выгодные цены</h3>
                        <p>Конкурентные расценки и гибкая система скидок</p>
                    </div>
                </div>

                <div class="card bg-base-100 shadow-xl hover-shadow hover-scale">
                    <div class="card-body items-center text-center">
                        <div class="text-5xl mb-4">👷</div>
                        <h3 class="card-title">Опытные операторы</h3>
                        <p>Квалифицированный персонал с опытом 10+ лет</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Услуги -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Наши услуги</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $services = [
                        ['icon' => '🏗️', 'title' => 'Манипулятор', 'desc' => 'Грузоподъёмность до 10 тонн'],
                        ['icon' => '🚛', 'title' => 'Перевозка', 'desc' => 'Доставка грузов по городу'],
                        ['icon' => '🏢', 'title' => 'Стройка', 'desc' => 'Работы на объектах'],
                        ['icon' => '📦', 'title' => 'Погрузка', 'desc' => 'Погрузо-разгрузочные работы'],
                    ];
                @endphp

                @foreach($services as $service)
                    <div class="card bg-base-100 shadow-xl hover-shadow hover-scale cursor-pointer">
                        <div class="card-body items-center text-center">
                            <div class="text-6xl mb-4">{{ $service['icon'] }}</div>
                            <h3 class="card-title">{{ $service['title'] }}</h3>
                            <p>{{ $service['desc'] }}</p>
                            <div class="card-actions">
                                <button class="btn btn-primary btn-sm">Подробнее</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Статистика -->
    <section class="py-20 bg-primary text-primary-content">
        <div class="container mx-auto px-4">
            <div class="stats stats-vertical lg:stats-horizontal shadow w-full bg-transparent">
                <div class="stat">
                    <div class="stat-title text-primary-content opacity-70">Проектов завершено</div>
                    <div class="stat-value">5000+</div>
                </div>

                <div class="stat">
                    <div class="stat-title text-primary-content opacity-70">Довольных клиентов</div>
                    <div class="stat-value">3200+</div>
                </div>

                <div class="stat">
                    <div class="stat-title text-primary-content opacity-70">Лет опыта</div>
                    <div class="stat-value">14</div>
                </div>

                <div class="stat">
                    <div class="stat-title text-primary-content opacity-70">Единиц техники</div>
                    <div class="stat-value">25</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA секция -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="card bg-gradient-to-r from-primary to-secondary text-primary-content">
                <div class="card-body items-center text-center">
                    <h2 class="card-title text-4xl mb-4">Готовы начать работу?</h2>
                    <p class="mb-6">Закажите манипулятор прямо сейчас и получите скидку 10%</p>
                    <div class="card-actions">
                        <button onclick="openContactModal()" class="btn btn-neutral btn-lg hover-scale">
                            Заказать со скидкой
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
