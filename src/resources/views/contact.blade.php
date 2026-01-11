@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <h1>📞 Свяжитесь с нами</h1>
    
    <div style="margin-top: 2rem;">
        <h2>Контактная информация:</h2>
        <p><strong>Email:</strong> info@laravel-site.com</p>
        <p><strong>Телефон:</strong> +7 (999) 123-45-67</p>
    </div>

    <div style="margin-top: 2rem;">
        <h2>Форма обратной связи:</h2>
        <form>
            <div style="margin-bottom: 1rem;">
                <label>Имя:</label><br>
                <input type="text" style="padding: 0.5rem; width: 100%; max-width: 300px; border: none; border-radius: 5px; color: black;">
            </div>
            <div style="margin-bottom: 1rem;">
                <label>Email:</label><br>
                <input type="email" style="padding: 0.5rem; width: 100%; max-width: 300px; border: none; border-radius: 5px; color: black;">
            </div>
            <div style="margin-bottom: 1rem;">
                <label>Сообщение:</label><br>
                <textarea style="padding: 0.5rem; width: 100%; max-width: 300px; height: 100px; border: none; border-radius: 5px; color: black;"></textarea>
            </div>
            <button type="submit" style="padding: 0.5rem 1rem; background: #4ade80; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Отправить сообщение
            </button>
        </form>
    </div>
@endsection
