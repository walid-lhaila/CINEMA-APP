<?php

namespace App\Http\Controllers;

use App\Services\RegisterService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $registerService;

    public function __construct(RegisterService $registerService){
        $this->registerService = $registerService;
    }

    public function filmmakerStore (Request $request){
        $userData = $request->only('firstName', 'lastName', 'address', 'phone', 'email', 'password');
        $filmmaker = $this->registerService->createFilmmaker($userData);

        return redirect('/login')->with('success', 'Registration successful!');
    }

    public function clientStore(Request $request){
        $userData = $request->only('firstName', 'lastName', 'address', 'phone', 'email', 'password');
        $client = $this->registerService->createClient($userData);

        return redirect('/login')->with('success', 'Registration successful!');
    }
}
