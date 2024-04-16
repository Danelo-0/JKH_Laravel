<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function registrationIndex()
    {
        return view('registration');
    }

}
