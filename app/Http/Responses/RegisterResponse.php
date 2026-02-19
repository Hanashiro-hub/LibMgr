<?php
namespace App\Http\Responses;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{
    public function toResponse($request)
    {
        auth()->logout();
        return redirect()->intended('login')
            ->with('status', 'ユーザ登録が完了しました。ログインしてください。');
    }
}
