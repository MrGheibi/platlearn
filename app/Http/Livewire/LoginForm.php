<?php

namespace App\Http\Livewire;

use App\Events\JWTAttempted;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{
    use WireMessages,WireAuth;

    public $count = 0;
    public $password = '';
    public $email = '';
    public $alertSatus = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|string|min:3',
    ];

    public function render()
    {
        return view('livewire.login-form');
    }

    public function Login()
    {
        $this->validate();
        $user = [
            'email' => $this->email,
            'password' => $this->password
        ];
        $this->authing($user, 30);
    }
}
