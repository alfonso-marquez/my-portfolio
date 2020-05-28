<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class LoginController extends Controller
{
    public function start() { 
        // send the user's request to github
        return Socialite::driver('github')->redirect();
    }

    public function githubRedirect() {
        // get oauth request back from github to authenticate user
    }
}
