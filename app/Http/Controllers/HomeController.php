<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function us()
    {
        return view('us');
    }

    public function schedule()
    {
        return view('schedule');
    }

    public function list()
    {
        return view('list');
    }
}
