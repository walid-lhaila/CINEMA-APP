<?php

namespace App\Http\Controllers;

use App\Services\LoginService;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

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

            if ($user->banned_at !== null) {
                return Redirect::route('banned');
            }

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
            return redirect('/login')->with('error', $loginResult['message'])->withInput();
        }
    }

    public function banned(){
        return view('banned');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $existingUser = User::where('email', $user->email)->first();

            if ($existingUser) {
                Auth::login($existingUser);

                if ($existingUser->client) {
                    return redirect('/home')->with('success', 'Login successful!');
                } elseif ($existingUser->admin) {
                    return redirect('/dashboard')->with('success', 'Login successful!');
                } elseif ($existingUser->filmmaker) {
                    return redirect('/addMovies')->with('success', 'Login successful!');
                } else {
                    return redirect('/login')->with('error', 'Unrecognized user role!');
                }
            } else {
                $newUser = User::create([
                    'firstName' => $user->name,
                    'lastName' => '',
                    'email' => $user->email,
                    'password' => '',
                ]);

                $newUser->client()->create([]);

                Auth::login($newUser);

                return redirect('/home')->with('success', 'Login successful!');
            }
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Something went wrong');
        }
    }
}
