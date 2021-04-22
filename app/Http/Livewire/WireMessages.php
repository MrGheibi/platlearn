<?php


namespace App\Http\Livewire;


trait WireMessages
{
    public function getMessages() {
        return [
            'email.required' => 'ایمیل رو یادت رفته !',
            'password.required' => 'رمز عبور رو یادت رفته !',
            'email.email' => 'فرمت ایمیلت نادرسته !',
            'name.required' => 'نام یادت رفت !',
            'lastName.required' => 'نام خانوادگی یادت رفت !',
        ];
    }
}
