<?php
$content = '
    <section class="hero bg-base-200 rounded-lg p-8 mb-8">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Аренда манипулятора</h1>
                <p class="py-6">Предоставляем услуги аренды манипуляторов в Минске и области. Быстро, надежно, выгодно.</p>
                <button class="btn btn-primary" onclick="window.location.href=\'/catalog\'">Заказать</button>
            </div>
        </div>
    </section>

    <section class="mb-8">
        <h2 class="text-3xl font-bold mb-4">Наши услуги</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="card-body">
                    <h3 class="card-title">Перевозка грузов</h3>
                    <p>Перевозка строительных материалов, оборудования и других грузов.</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="card-body">
                    <h3 class="card-title">Монтажные работы</h3>
                    <p>Установка и монтаж конструкций с помощью манипулятора.</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="card-body">
                    <h3 class="card-title">Погрузочно-разгрузочные работы</h3>
                    <p>Эффективная погрузка и разгрузка вашего груза.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-3xl font-bold mb-4">Почему мы?</h2>
        <div class="stats shadow">
            <div class="stat">
                <div class="stat-title">Лет на рынке</div>
                <div class="stat-value">10+</div>
                <div class="stat-desc">Опыт работы</div>
            </div>
            <div class="stat">
                <div class="stat-title">Довольных клиентов</div>
                <div class="stat-value">2000+</div>
                <div class="stat-desc">Благодарных отзывов</div>
            </div>
            <div class="stat">
                <div class="stat-title">Машин в парке</div>
                <div class="stat-value">15</div>
                <div class="stat-desc">Разной грузоподъемности</div>
            </div>
        </div>
    </section>
';

include 'layouts/base.php';
