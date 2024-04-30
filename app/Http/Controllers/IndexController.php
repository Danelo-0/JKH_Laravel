<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function ratesIndex()
    {
        return view('rates');
    }

    public function companyIndex()
    {
        return view('company');
    }

    public function faqIndex()
    {
        return view('faq');
    }

    public function authIndex()
    {
        return view('auth');
    }

    public function authStore(LoginRequest $request)
    {
        if(Auth::attempt($request->only('login', 'password')))
        {
            return redirect()->route('profile.show');
        }

        return back()->withInput()->withErrors(
            [
                'login' => 'Неверные данные пользователя. Проверьте логин или пароль.'
            ]
            );
    }

    public function registrationIndex()
    {
        return view('registration');
    }

    public function registrationStore(RegistrationRequest $request)
    {
        User::create([
            'login' => $request->login,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('auth.index');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('jkh.index');
    }
    public function profileShow()
    {
        $user = Auth::user();
        return view('profile')->with(['user' => $user]);
    }


}
