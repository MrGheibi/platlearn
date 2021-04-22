<?php


namespace App\Http\Livewire;


use App\Events\JWTAttempted;
use Illuminate\Support\Facades\Auth;

trait WireAuth
{
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * @param $user
     * @param int $day
     * @param bool $status
     * @return \Illuminate\Http\RedirectResponse
     */
    private function authing($user, $day = 7, $status = true)
    {
        $token_validity = ($day * 1440);
        $this->guard()->factory()->setTTL($token_validity);
        if (!$token = $this->guard()->attempt($user)) {
            $this->alertSatus = true;
            session()->flash('faild', 'اطلاعات وارد شده همخوانی ندارند !');
        } else {
            event(new JWTAttempted(\auth()->user()));
            $authToken = $this->respondWithToken($token, $status);
            \auth('web')->loginUsingId($authToken['user']['id'],true);
            return redirect()->to(env('app_panel').'?token=' . $authToken['token'] .
                '&tokenType=' . $authToken['token_type'] .
                '&status=' . $authToken['status']);
        }
    }

    protected function respondWithToken($token, $status): array
    {
        return [
            'user' => auth()->user(),
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL(),
            'status' => $status
        ];
    }
}
