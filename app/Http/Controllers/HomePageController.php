<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index($username = 'Guest')
    {
        return view('homepage', ['username' => $username]);
    }

    public function accessDenied()
    {
        return view('accessDenied');
    }
}
