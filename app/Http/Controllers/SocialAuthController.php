<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class SocialAuthController extends Controller
{
    public function redirect($service) {
        return Socialite::driver($service)->redirect();
    }

    public function callback($service) {
        $user = Socialite::driver($service)->user();
        return view('home')
        ->with('user', $user)
        ->with('service', $service);
    }
}
