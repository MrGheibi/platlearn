<?php


namespace App\Repositories;


use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepositories extends Repository
{
    public function model()
    {
        return User::class;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function createUser(array $data)
    {
        $password = ['password' => Hash::make($data['password'])];
        return $this->model->create(array_merge($data, $password));
    }
}
