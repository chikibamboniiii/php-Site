@extends("layouts.base")
@section("content")
    <!-- Главная страница -->
    <section id="home" class="page active">
        <div class="hero">
            <div class="container hero-content">
                <h2>АРЕНДА МАНИПУЛЯТОРА В МИНСКЕ</h2>
                <p>Авто: MAN, кузов 7м. 15 т. + прицеп 8м. 15 т. манипулятор 15 м. до 7 тонн.</p>
                <p>Цены: от 100Р. час и от 3, бр. за км.</p>
                <a href="#" class="btn nav-link" data-page="services">Наши услуги</a>
            </div>
        </div>

        <div class="features">
            <div class="container">
                <h2 class="section-title">Наши преимущества</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <i class="fas fa-clock feature-icon"></i>
                        <h3>Круглосуточная работа</h3>
                        <p>Работаем 24/7 для вашего удобства</p>
                    </div>
                    <div class="feature-card">
                        <i class="fas fa-tools feature-icon"></i>
                        <h3>Современная техника</h3>
                        <p>Новый парк манипуляторов различной грузоподъемности</p>
                    </div>
                    <div class="feature-card">
                        <i class="fas fa-ruble-sign feature-icon"></i>
                        <h3>Доступные цены</h3>
                        <p>Конкурентные цены и гибкая система скидок</p>
                    </div>
                    <div class="feature-card">
                        <i class="fas fa-map-marker-alt feature-icon"></i>
                        <h3>Обслуживание по Минску и области</h3>
                        <p>Работаем на всей территории Минска и области</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Страница услуг -->
    <section id="services" class="page">
        <div class="container">
            <h2 class="section-title">Наши услуги</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-img" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');"></div>
                    <div class="service-content">
                        <h3>Строительные работы</h3>
                        <p>Помощь в строительных и монтажных работах любой сложности</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img" style="background-image: url('https://images.unsplash.com/photo-1576675466969-38eeae4b41f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');"></div>
                    <div class="service-content">
                        <h3>Погрузка и разгрузка</h3>
                        <p>Быстрая и безопасная погрузка/разгрузка тяжелых грузов</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img" style="background-image: url('https://images.unsplash.com/photo-1551524164-6ca64fb5c572?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');"></div>
                    <div class="service-content">
                        <h3>Перевозка грузов</h3>
                        <p>Надежная перевозка строительных материалов и оборудования</p>
                    </div>
                </div>
            </div>

            <div class="service-info">
                <h3>Зона обслуживания и режим работы</h3>
                <p>Мы работаем по всему Минску и Минской области. Наши услуги доступны круглосуточно, 7 дней в неделю, включая выходные и праздничные дни.</p>
                <br>
            </div>
        </div>

        <div class="reviews">
            <div class="container">
                <h2 class="section-title">Отзывы клиентов</h2>
                <div class="reviews-slider">
                    <div class="review-card">
                        <div class="review-header">
                            <div class="review-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="review-name">Александр Иванов</div>
                        </div>
                        <div class="review-text">
                            Отличный сервис! Быстро выполнили заказ, операторы вежливые, техника в идеальном состоянии. Рекомендую!
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <div class="review-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="review-name">Ольга Петрова</div>
                        </div>
                        <div class="review-text">
                            Заказывала манипулятор для переезда. Всё прошло быстро и без проблем. Спасибо за качественную работу!
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="review-header">
                            <div class="review-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="review-name">Сергей Козлов</div>
                        </div>
                        <div class="review-text">
                            Работаем с этой компанией уже несколько лет. Всегда пунктуальны, профессиональны и предлагают разумные цены.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Страница цен -->
    <section id="pricing" class="page">
        <div class="container">
            <h2 class="section-title">Наши цены</h2>

            <div class="pricing-images">
                <p>Фотографии, демонстрирующие объемы и сложность работ:</p>
                <br>

                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-img" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');"></div>
                        <div class="service-content">
                            <h3>Строительные работы</h3>
                            <p>Помощь в строительных и монтажных работах любой сложности</p>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-img" style="background-image: url('https://images.unsplash.com/photo-1576675466969-38eeae4b41f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');"></div>
                        <div class="service-content">
                            <h3>Погрузка и разгрузка</h3>
                            <p>Быстрая и безопасная погрузка/разгрузка тяжелых грузов</p>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-img" style="background-image: url('https://images.unsplash.com/photo-1551524164-6ca64fb5c572?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');"></div>
                        <div class="service-content">
                            <h3>Перевозка грузов</h3>
                            <p>Надежная перевозка строительных материалов и оборудования</p>
                        </div>
                    </div>
                </div>

                <!-- Здесь можно добавить фотографии -->
            </div>

            <table class="pricing-table">
                <thead>
                <tr>
                    <th>Услуга</th>
                    <th>Тариф</th>
                    <th>Минимальный заказ</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Аренда манипулятора (час)</td>
                    <td>от 100 бел. руб.</td>
                    <td>2 часа</td>
                </tr>
                <tr>
                    <td>Аренда манипулятора (километр)</td>
                    <td>от 3 бел. руб.</td>
                    <td>20 км</td>
                </tr>
                <tr>
                    <td>Погрузо-разгрузочные работы</td>
                    <td>от 50 бел. руб.</td>
                    <td>1 час</td>
                </tr>
                <tr>
                    <td>Строительные работы</td>
                    <td>от 120 бел. руб.</td>
                    <td>3 часа</td>
                </tr>
                </tbody>
            </table>

            <div class="conditions">
                <h3>Условия аренды</h3>
                <ul class="conditions-list">
                    <li>Минимальный заказ - 2 часа</li>
                    <li>Оплата производится наличными или банковской картой</li>
                    <li>При длительной аренде (более 8 часов) предоставляется скидка</li>
                    <li>В стоимость входят услуги водителя и оператора</li>
                    <li>Топливо оплачивается отдельно</li>
                    <li>Предоплата 30% при заказе на определенную дату</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Страница вопросов и ответов -->
    <section id="faq" class="page">
        <div class="container">
            <h2 class="section-title">Вопросы и ответы</h2>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        Как быстро можно заказать манипулятор?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Мы стараемся максимально оперативно реагировать на заявки. В большинстве случаев можем предоставить технику в течение 1-2 часов после обращения.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Работаете ли вы в выходные и праздничные дни?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Да, мы работаем круглосуточно, без выходных и праздничных дней. Вы можете заказать наши услуги в любое удобное для вас время.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Какие документы необходимы для аренды?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Для физических лиц достаточно паспорта. Для юридических лиц необходим пакет документов, подтверждающих регистрацию предприятия.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Можно ли заказать манипулятор с оператором?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Да, все наши манипуляторы предоставляются с опытными операторами, которые имеют необходимые допуски и сертификаты.
                    </div>
                </div>
            </div>

            <div class="ask-question">
                <h3>Задать вопрос</h3>
                <form id="question-form">
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="text" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Ваш email</label>
                        <input type="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="question">Ваш вопрос</label>
                        <textarea id="question" required></textarea>
                    </div>
                    <button type="submit" class="btn">Отправить вопрос</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Страница контактов -->
    <section id="contacts" class="page">
        <div class="container">
            <h2 class="section-title">Контакты</h2>

            <div class="contact-container">
                <div class="contact-info">
                    <h3>Контактная информация</h3>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <p>+375-29-111-11-11</p>
                            <p>+375-29-222-22-22</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <p>info@manipulator.by</p>
                            <p>order@manipulator.by</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <p>г. Минск, ул. Строителей, 15</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <p>Режим работы: круглосуточно</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <h3>Форма обратной связи</h3>
                    <form id="contact-form">
                        <div class="form-group">
                            <label for="contact-name">Ваше имя</label>
                            <input type="text" id="contact-name" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-phone">Телефон</label>
                            <input type="tel" id="contact-phone" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-message">Сообщение</label>
                            <textarea id="contact-message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Отправить сообщение</button>
                    </form>
                </div>
            </div>

            <div class="about-company">
                <h3>О компании</h3>
                <p>Мы предоставляем услуги аренды манипуляторов в Минске и Минской области уже более 10 лет. Наш парк техники постоянно обновляется и соответствует всем современным требованиям безопасности и эффективности.</p>
                <p>Мы ценим каждого клиента и стремимся предложить оптимальные условия сотрудничества. Наши специалисты всегда готовы проконсультировать по вопросам выбора техники и помочь в решении ваших задач.</p>
            </div>
        </div>
    </section>
    @endsection
