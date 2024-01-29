<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function register()
    {
        return view('auth.register');
    }
    public function registerVerify(RegisterRequest $registerRequest)
    {
        User::create(
            [
                'name' => $registerRequest->name,
                'email' => $registerRequest->email,
                'password' => bcrypt($registerRequest->password)
            ]
        );
        return redirect()->route('login')->with('success', 'Usuario registrado correctamente');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function loginVerify(LoginRequest $loginRequest)
    {
        // $userCredentials = $loginRequest->only('email', 'password');
        if (Auth::attempt(['email' => $loginRequest->email, 'password' => $loginRequest->password])) {
            return redirect()->route('usernavbar');
        }
        return back()->withErrors(['invalid_credentials' => 'Credenciales invalidas']);
    }
    public function signOut()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Session cerrada correctamente');
    }
}
