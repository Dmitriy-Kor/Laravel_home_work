<?php

namespace App\Http\Controllers;

use App\Services\SocialiteService;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function init()
    {
        $driver = request()->segment(2); // не очень красиво, магические числа и код дальше повторяеться
        return Socialite::driver($driver)->redirect();
    }

    public function callback(SocialiteService $service)
    {
        $driver = request()->segment(2);
        $user = Socialite::driver($driver)->user();
        //dd($user);
        $service->userLogin($user);
        return redirect()->route('admin.news.index');
    }
}
