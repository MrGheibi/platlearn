<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Repositories\UserRepositories;
use Livewire\Component;

class RegisterForm extends Component
{

    use WireAuth;

    public $name = '';
    public $lastName = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $alertSatus = false;


    protected $rules = [
        'email' => 'required|email',
        'name' => 'required|min:2',
        'lastName' => 'required|min:2',
        'password' => 'required|string|min:3|confirmed',
    ];

    public function render()
    {
        return view('livewire.register-form');
    }

    public function register(UserRepositories $user)
    {
//        $userArray = $this->setUser();
//        $this->validate();
//        $user->createUser($userArray);
//        unset($userArray['lastName'],$userArray['name']);
//        $this->authing($userArray, 30);
    }

    public function setUser(): array
    {
        return [
            'name' => $this->name,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }


}
