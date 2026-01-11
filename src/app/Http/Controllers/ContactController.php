<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Обработка отправки контактной формы
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function send(Request $request)
    {
        // Валидация данных
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:50',
            'phone' => 'required|regex:/^[\+]?[0-9]{10,15}$/',
            'email' => 'required|email|max:100',
            'service' => 'nullable|string|max:50',
            'message' => 'nullable|string|max:500',
            'agreement' => 'accepted',
        ], [
            'name.required' => 'Поле "Имя" обязательно для заполнения',
            'name.min' => 'Имя должно содержать минимум 2 символа',
            'phone.required' => 'Поле "Телефон" обязательно для заполнения',
            'phone.regex' => 'Некорректный формат номера телефона',
            'email.required' => 'Поле "Email" обязательно для заполнения',
            'email.email' => 'Введите корректный email адрес',
            'agreement.accepted' => 'Необходимо согласие на обработку данных',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Получаем валидированные данные
        $data = $validator->validated();

        try {
            // Здесь можно добавить отправку email
            // Mail::to('admin@manipulator.by')->send(new ContactFormMail($data));

            // Или сохранение в базу данных
            // Contact::create($data);

            // Логирование для отладки
            \Log::info('Новая заявка:', $data);

            return response()->json([
                'success' => true,
                'message' => 'Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.'
            ]);

        } catch (\Exception $e) {
            \Log::error('Ошибка отправки формы: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Произошла ошибка при отправке формы. Попробуйте позже.'
            ], 500);
        }
    }

    /**
     * Отправка быстрой заявки (минимальная форма)
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function quickOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|regex:/^[\+]?[0-9]{10,15}$/',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Обработка быстрой заявки
        \Log::info('Быстрая заявка:', $request->all());

        return response()->json([
            'success' => true,
            'message' => 'Спасибо! Мы перезвоним вам в течение 15 минут.'
        ]);
    }
}
