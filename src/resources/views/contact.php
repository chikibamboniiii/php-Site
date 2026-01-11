<?php
$content = '
    <h1 class="text-4xl font-bold mb-8">Контакты</h1>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div>
            <h2 class="text-2xl font-bold mb-4">Свяжитесь с нами</h2>
            <form class="space-y-4" method="post" action="/submit_contact" onsubmit="return validateForm()">
                <div class="form-control">
                    <label class="label" for="name">
                        <span class="label-text">Ваше имя</span>
                    </label>
                    <input type="text" id="name" name="name" class="input input-bordered w-full" required />
                </div>
                <div class="form-control">
                    <label class="label" for="email">
                        <span class="label-text">Email</span>
                    </label>
                    <input type="email" id="email" name="email" class="input input-bordered w-full" required />
                </div>
                <div class="form-control">
                    <label class="label" for="phone">
                        <span class="label-text">Телефон</span>
                    </label>
                    <input type="tel" id="phone" name="phone" class="input input-bordered w-full" required />
                </div>
                <div class="form-control">
                    <label class="label" for="message">
                        <span class="label-text">Сообщение</span>
                    </label>
                    <textarea id="message" name="message" class="textarea textarea-bordered h-24" required></textarea>
                </div>
                <div class="form-control">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
        <div>
            <h2 class="text-2xl font-bold mb-4">Наши контакты</h2>
            <div class="space-y-4">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>+375 (29) 123-45-67</span>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>info@manipulator.by</span>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>г. Минск, ул. Примерная, 10</span>
                </div>
            </div>
            <div class="mt-8">
                <h3 class="text-xl font-bold mb-4">Мы на карте</h3>
                <div class="h-64 bg-base-300 rounded-lg flex items-center justify-center">
                    Карта
                </div>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const phone = document.getElementById("phone").value;
            const message = document.getElementById("message").value;

            if (!name || !email || !phone || !message) {
                alert("Все поля обязательны для заполнения");
                return false;
            }

            // Простая валидация email
            const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Введите корректный email");
                return false;
            }

            // Валидация телефона (простая)
            const phoneRegex = /^[0-9\\-\\+]{9,15}$/;
            if (!phoneRegex.test(phone)) {
                alert("Введите корректный номер телефона");
                return false;
            }

            return true;
        }
    </script>
';

include 'layouts/base.php';
