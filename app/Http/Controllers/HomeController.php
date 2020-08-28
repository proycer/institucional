<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $title = 'Sistemas Online';
        return view('home', compact('title'));
    }

    public function us()
    {
        $title = 'Nosotros';
        return view('us', compact('title'));
    }

    public function schedule()
    {
        $title = 'Turnos Online';
        return view('schedule', compact('title'));
    }

    public function list()
    {
        $title = 'Catalogo Online';
        return view('list', compact('title'));
    }
}
