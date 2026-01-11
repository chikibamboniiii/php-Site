<!-- Модальное окно для обратной связи -->
<input type="checkbox" id="contact-modal" class="modal-toggle" />
<div class="modal">
    <div class="modal-box relative">
        <label for="contact-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>

        <h3 class="text-lg font-bold mb-4">Заказать обратный звонок</h3>

        <form action="/send-contact" method="POST" id="contact-form" class="space-y-4">
            @csrf

            <!-- Имя -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Ваше имя *</span>
                </label>
                <input
                    type="text"
                    name="name"
                    placeholder="Иван Иванов"
                    class="input input-bordered w-full"
                    required
                    minlength="2"
                    maxlength="50"
                />
            </div>

            <!-- Телефон -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Номер телефона *</span>
                </label>
                <input
                    type="tel"
                    name="phone"
                    placeholder="+375 (29) 123-45-67"
                    class="input input-bordered w-full"
                    required
                    pattern="[\+]?[0-9]{10,15}"
                    title="Введите корректный номер телефона"
                />
                <label class="label">
                    <span class="label-text-alt">Формат: +375291234567</span>
                </label>
            </div>

            <!-- Email -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Email *</span>
                </label>
                <input
                    type="email"
                    name="email"
                    placeholder="example@mail.com"
                    class="input input-bordered w-full"
                    required
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                    title="Введите корректный email"
                />
            </div>

            <!-- Услуга -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Выберите услугу</span>
                </label>
                <select name="service" class="select select-bordered w-full">
                    <option disabled selected>Выберите услугу</option>
                    <option value="manipulator">Аренда манипулятора</option>
                    <option value="cargo">Перевозка грузов</option>
                    <option value="construction">Строительные работы</option>
                    <option value="other">Другое</option>
                </select>
            </div>

            <!-- Сообщение -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Комментарий</span>
                </label>
                <textarea
                    name="message"
                    class="textarea textarea-bordered h-24"
                    placeholder="Опишите вашу задачу..."
                    maxlength="500"
                ></textarea>
                <label class="label">
                    <span class="label-text-alt">Максимум 500 символов</span>
                </label>
            </div>

            <!-- Согласие -->
            <div class="form-control">
                <label class="label cursor-pointer justify-start gap-2">
                    <input
                        type="checkbox"
                        name="agreement"
                        class="checkbox checkbox-primary"
                        required
                    />
                    <span class="label-text text-sm">Я согласен на обработку персональных данных</span>
                </label>
            </div>

            <!-- Кнопки -->
            <div class="modal-action">
                <label for="contact-modal" class="btn">Отмена</label>
                <button type="submit" class="btn btn-primary hover-scale">Отправить</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Обработка отправки формы
    document.getElementById('contact-form')?.addEventListener('submit', function(e) {
        e.preventDefault();

        // Здесь можно добавить AJAX отправку
        const formData = new FormData(this);

        // Для примера просто покажем alert
        alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');

        // Закрываем модалку
        document.getElementById('contact-modal').checked = false;

        // Очищаем форму
        this.reset();

        // В реальном проекте здесь будет:
        /*
        fetch('/send-contact', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Обработка успешного ответа
        })
        .catch(error => {
            // Обработка ошибки
        });
        */
    });
</script>
