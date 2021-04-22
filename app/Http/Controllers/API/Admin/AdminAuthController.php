<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Notifications\SendTokenNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;


class AdminAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'islogin']]);
    }

    protected function login(LoginRequest $loginRequest)
    {
        $user = [
            'email' => $loginRequest->email,
            'password' => $loginRequest->password
        ];
        $authToken = $this->authing($user, 0.083);
        if (!$authToken) {
            return response()->json(['message' => 'اطلاعات وارد شده همخوانی ندارند !'], 422);
        }
        $user = User::query()->where('email', $user['email'])->first();
        $user->notify(new SendTokenNotification($authToken));
        return response()->json(['message' => 'پیام تایید هویت با موفقیت به ایمیل شما ارسال شد'], 200);

    }

    protected function guard()
    {
        return Auth::guard();
    }

    public function logout()
    {
        $this->guard()->logout();
        return response()->json(['status' => true]);
    }

    public function refresh()
    {
        $this->setFactoryTTl(30);
        return $this->respondWithToken($this->guard()->refresh(), true);
    }

    public function authing($user, $day, $status = true)
    {
        $token_validity = ($day * 1440);
        $this->guard()->factory()->setTTL($token_validity);
        if (!$token = $this->guard()->attempt($user)) {
            return false;
        } else {
            return [
                'token' => $token,
                'token_type' => 'bearer',
                'status' => true,
            ];
        }
    }

    public function isLogin()
    {
        if ($this->guard()->check() == true) {
            return response()->json([
                'dataResponse' => $this->refresh(),
                'status' => true], Response::HTTP_OK);
        } else {
            return response()->json(['status' => false], Response::HTTP_OK);
        }
    }

    protected function respondWithToken($token, $status)
    {
        return response()->json([
            'user' => auth()->user(),
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL(),
            'status' => $status
        ], Response::HTTP_OK);
    }

    protected function setFactoryTTl($day)
    {
        $token_validity = ($day * 1440);
        $this->guard()->factory()->setTTL($token_validity);
    }

}
