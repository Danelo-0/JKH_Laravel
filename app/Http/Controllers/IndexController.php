<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditInfoRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\MessageRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\Message;
use App\Models\User;
use App\Models\User_info;
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

    public function editinfoShow()
    {
        $user = Auth::user();
        return view('editinfo')->with(['user' => $user]);
    }

    public function editinfoStore(EditInfoRequest $request)
    {
        $userId = Auth::user()->id;
        //$userInfo = User::find($userId)->userInfo();
        //dd($request->except(['_token', 'done']));
        $userInfo = User_info::where('user_id', $userId)->update($request->except(['_token', 'done']));
        
        //$userInfo->update($request->all());

        return redirect()->route('profile.show');
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

    public function messageStore(MessageRequest $request)
    {
        Message::create([
            'user_id' => auth()->user()->id,
            'address' => $request->address,
            'phone' => $request->phone,
            'type' => $request->type,
            'message' => $request->message,
        ]);
        
        return redirect()->route('profile.show');
    }




}
