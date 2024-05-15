<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class History extends Controller
{
    public function history()
    {
        return view('menu.history');
    }
    public function kazm()
    {
        return view('menu.kazm');
    }
    public function school()
    {
        return view('menu.school');
    }
    public function dimord()
    {
        return view('menu.dimord');
    }
    public function about()
    {
        return view('menu.about');
    }
}
