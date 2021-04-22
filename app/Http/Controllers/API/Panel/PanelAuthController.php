<?php

namespace App\Http\Controllers\API\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class PanelAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['islogin']]);
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

    public function isLogin()
    {
        if ($this->guard()->check() == true) {
            return response()->json([
                'dataResponse' => $this->refresh(),
                'status' => true],Response::HTTP_OK);
        } else {
            return response()->json(['status' => false],Response::HTTP_OK);
        }
    }

    protected function respondWithToken($token, $status)
    {
        return response()->json([
            'user' => auth()->user(),
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() ,
            'status' => $status
        ], Response::HTTP_OK);
    }

    protected function setFactoryTTl ($day)
    {
        $token_validity = ($day * 1440);
        $this->guard()->factory()->setTTL($token_validity);
    }

}
