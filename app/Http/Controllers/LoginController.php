<?php

namespace App\Http\Controllers;

use App\Services\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $loginService;

    public function __construct(LoginService $loginService){
        $this->loginService = $loginService;
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        $loginResult = $this->loginService->login($credentials);

        if ($loginResult['status'] === 'success') {
            $user = $loginResult['user'];
            Auth::login($user);

            if ($user->filmmaker) {
                return redirect('/addMovies')->with('success', 'Login successful!');
            } elseif ($user->client) {
                return redirect('/home')->with('success', 'Login successful!');
            } elseif ($user->admin) {
                return redirect('/dashboard')->with('success', 'Login successful!');
            } else {
                return redirect('/login')->with('error', 'Unrecognized user role!');
            }
        } else {
            return redirect('/login')->with('error', $loginResult['message']);
        }
    }
}
